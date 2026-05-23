@extends('layouts.admin')

@section('header_title', 'Admin Dashboard')

@section('content')
    <div class="mb-6 bg-gradient-to-r from-indigo-500 to-blue-600 rounded-lg shadow-sm p-8 text-white">
        <h1 class="text-3xl font-bold mb-2">Welcome Back Bold Fellows Ltd!</h1>
        <p class="text-indigo-100 text-lg">Manage your website's content and view ll inquiries.</p>
    </div>

    <div class="bg-white rounded-lg shadow-sm w-full">

        {{-- Header --}}
        <div
            class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Content Management</h2>
                <p class="text-sm text-gray-400 mt-1">Select any section below to edit its content.</p>
            </div>
            <div class="relative w-full sm:w-auto">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="fas fa-search text-gray-400 text-sm"></i>
                </span>
                <input type="text" id="searchInput" placeholder="Search sections..."
                    class="border border-gray-200 rounded-md py-2 pl-10 pr-4 text-sm w-full sm:w-64 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 text-gray-600">
            </div>
        </div>

        {{-- Groups --}}
        <div class="p-6 space-y-6" id="groupsContainer">

            @php
                $colorMap = [
                    'indigo' => [
                        'header' => 'bg-indigo-50 border-indigo-200',
                        'icon' => 'bg-indigo-100 text-indigo-600',
                        'title' => 'text-indigo-700',
                        'badge' => 'bg-indigo-100 text-indigo-600',
                        'chevron' => 'text-indigo-400',
                        'card' => 'hover:border-indigo-300 hover:shadow-indigo-100 group-hover:text-indigo-600',
                        'cog' => 'group-hover:bg-indigo-50 group-hover:text-indigo-500',
                    ],
                    'blue' => [
                        'header' => 'bg-blue-50 border-blue-200',
                        'icon' => 'bg-blue-100 text-blue-600',
                        'title' => 'text-blue-700',
                        'badge' => 'bg-blue-100 text-blue-600',
                        'chevron' => 'text-blue-400',
                        'card' => 'hover:border-blue-300 hover:shadow-blue-100 group-hover:text-blue-600',
                        'cog' => 'group-hover:bg-blue-50 group-hover:text-blue-500',
                    ],
                    'green' => [
                        'header' => 'bg-green-50 border-green-200',
                        'icon' => 'bg-green-100 text-green-600',
                        'title' => 'text-green-700',
                        'badge' => 'bg-green-100 text-green-600',
                        'chevron' => 'text-green-400',
                        'card' => 'hover:border-green-300 hover:shadow-green-100 group-hover:text-green-600',
                        'cog' => 'group-hover:bg-green-50 group-hover:text-green-500',
                    ],
                ];
            @endphp

            @foreach($sections as $groupKey => $group)
                @php $c = $colorMap[$group['color']] ?? $colorMap['indigo']; @endphp

                <div class="section-group border border-gray-200 rounded-lg overflow-hidden shadow-sm">

                    {{-- Group Header (clickable accordion) --}}
                    <button type="button" onclick="toggleGroup('{{ $groupKey }}')"
                        class="w-full flex items-center justify-between px-5 py-4 {{ $c['header'] }} border-b border-gray-200 transition-colors duration-150 focus:outline-none">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg {{ $c['icon'] }} flex items-center justify-center flex-shrink-0">
                                <i class="fas {{ $group['icon'] }} text-sm"></i>
                            </div>
                            <div class="text-left">
                                <span class="text-sm font-bold {{ $c['title'] }}">{{ $group['label'] }}</span>
                                <p class="text-xs text-gray-400">{{ count($group['items']) }}
                                    section{{ count($group['items']) > 1 ? 's' : '' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-semibold px-2 py-1 rounded-full {{ $c['badge'] }}">
                                {{ count($group['items']) }}
                            </span>
                            <i id="chevron-{{ $groupKey }}"
                                class="fas fa-chevron-down text-sm {{ $c['chevron'] }} transition-transform duration-200"></i>
                        </div>
                    </button>

                    {{-- Group Items Grid --}}
                    <div id="group-{{ $groupKey }}" class="p-4 bg-gray-50">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
                            @foreach($group['items'] as $section)
                                <a href="{{ route('admin.edit-section', \Illuminate\Support\Str::slug($section)) }}"
                                    class="section-card group bg-white border border-gray-200 rounded-lg p-4 flex justify-between items-center hover:shadow-md transition-all duration-200 {{ $c['card'] }}">
                                    <span
                                        class="text-sm font-semibold text-gray-700 group-hover:text-inherit transition-colors leading-tight pr-2">
                                        {{ $section }}
                                    </span>
                                    <div
                                        class="flex-shrink-0 bg-gray-50 p-2 rounded-lg text-gray-400 transition-colors duration-200 {{ $c['cog'] }}">
                                        <i class="fas fa-cog text-xs"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    <script>
        // Accordion toggle
        function toggleGroup(key) {
            const panel = document.getElementById('group-' + key);
            const chev = document.getElementById('chevron-' + key);
            const isOpen = !panel.classList.contains('hidden');

            if (isOpen) {
                panel.classList.add('hidden');
                chev.style.transform = 'rotate(-90deg)';
            } else {
                panel.classList.remove('hidden');
                chev.style.transform = 'rotate(0deg)';
            }
        }

        // Live search — shows/hides individual cards and reveals their parent group
        document.getElementById('searchInput').addEventListener('keyup', function () {
            const filter = this.value.toLowerCase().trim();

            document.querySelectorAll('.section-group').forEach(group => {
                const cards = group.querySelectorAll('.section-card');
                const panel = group.querySelector('[id^="group-"]');
                let groupHasMatch = false;

                cards.forEach(card => {
                    const text = card.textContent.toLowerCase();
                    if (!filter || text.includes(filter)) {
                        card.style.display = '';
                        groupHasMatch = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Show/hide the whole group block
                group.style.display = groupHasMatch ? '' : 'none';

                // Auto-expand groups that have matches when searching
                if (filter && groupHasMatch && panel) {
                    panel.classList.remove('hidden');
                    const chev = group.querySelector('[id^="chevron-"]');
                    if (chev) chev.style.transform = 'rotate(0deg)';
                }
            });
        });
    </script>
@endsection
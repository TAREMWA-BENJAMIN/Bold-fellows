@extends('layouts.admin')

@section('header_title', 'Manage Frontend Content')

@section('content')
<div class="bg-white rounded-lg shadow-sm w-full">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-700">Content Management Options</h2>
        
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-search text-gray-400 text-sm"></i>
            </span>
            <input type="text" id="searchInput" placeholder="Search..." class="border border-gray-200 rounded-md py-2 pl-10 pr-4 text-sm w-64 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 text-gray-600">
        </div>
    </div>

    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="sectionsGrid">
            @foreach($sections as $section)
            <a href="{{ route('admin.edit-section', $section) }}" class="section-card bg-white border border-gray-100 shadow-sm rounded-md p-4 flex justify-between items-center hover:shadow-md transition-shadow duration-200 group">
                <span class="text-sm font-semibold text-gray-700 group-hover:text-indigo-600 transition-colors">{{ $section }}</span>
                <div class="bg-gray-50 p-2 rounded text-gray-400 group-hover:bg-indigo-50 group-hover:text-indigo-500 transition-colors">
                    <i class="fas fa-cog text-xs"></i>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let cards = document.querySelectorAll('.section-card');
        
        cards.forEach(card => {
            let text = card.textContent.toLowerCase();
            if(text.includes(filter)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
@endsection

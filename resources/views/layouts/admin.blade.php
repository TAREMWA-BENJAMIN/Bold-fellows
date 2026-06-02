<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS (compiled locally) -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar { background-color: #0b1136; }
        .sidebar-active { background-color: #5a4bfa; }
        body { background-color: #f3f4f6; }
    </style>
</head>
<body class="flex h-screen overflow-hidden text-gray-800">
    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 sidebar text-white flex flex-col h-full fixed md:relative z-30 transition-transform duration-300 transform -translate-x-full md:translate-x-0">
        <div class="h-20 flex items-center justify-between px-6 border-b border-gray-700">
            <!-- Dynamic Logo -->
            @php
                $adminLogoContent = \App\Models\FrontendContent::where('section', 'Header Settings')->where('key', 'logo')->first();
            @endphp
            <div class="bg-white rounded-full h-12 w-12 flex items-center justify-center overflow-hidden p-1">
                @if(isset($adminLogoContent->value) && !empty(trim($adminLogoContent->value)))
                    <img src="{{ asset($adminLogoContent->value) }}" alt="Logo" class="max-h-full max-w-full object-contain" />
                @else
                    <span class="text-xs text-black font-bold text-center">LOGO</span>
                @endif
            </div>
            <button onclick="toggleSidebar()" class="md:hidden text-gray-300 hover:text-white focus:outline-none">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <nav class="flex-1 py-4">
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('admin.manage-pages') }}" class="flex items-center px-6 py-3 {{ request()->routeIs('admin.manage-pages') || request()->routeIs('admin.edit-section') ? 'sidebar-active border-l-4 border-white' : 'hover:bg-opacity-20 hover:bg-white text-gray-300' }}">
                        <i class="fas fa-home w-6 text-center"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.inquiries') }}" class="flex items-center justify-between px-6 py-3 {{ request()->routeIs('admin.inquiries') || request()->routeIs('admin.view-inquiry') ? 'sidebar-active border-l-4 border-white' : 'hover:bg-opacity-20 hover:bg-white text-gray-300' }}">
                        <div class="flex items-center">
                            <i class="fas fa-envelope w-6 text-center"></i>
                            <span class="ml-3">Inquiries</span>
                        </div>
                        @php $unreadCount = \App\Models\ContactMessage::where('is_read', false)->count(); @endphp
                        @if($unreadCount > 0)
                            <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-opacity-20 hover:bg-white">
                        <i class="fas fa-hdd w-6 text-center"></i>
                        <span class="ml-3">Cache</span>
                    </a>
                </li>
                <li class="mt-6 border-t border-gray-700/50 pt-4">
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                       class="flex items-center px-6 py-3 text-red-400 hover:bg-red-500/10 hover:text-red-300 rounded-lg mx-3 transition-colors duration-150">
                        <i class="fas fa-sign-out-alt w-6 text-center"></i>
                        <span class="ml-3 font-semibold">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="h-20 bg-white border-b border-gray-200 flex items-center px-4 sm:px-8 z-10 w-full">
            <button onclick="toggleSidebar()" class="md:hidden mr-4 text-gray-600 hover:text-gray-900 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h1 class="text-xl text-gray-700 font-semibold truncate">@yield('header_title', 'Admin Dashboard')</h1>
        </header>

        <!-- Main Body -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobileOverlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>
</body>
</html>

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
    <!-- Sidebar -->
    <aside class="w-64 sidebar text-white flex flex-col h-full">
        <div class="h-20 flex items-center justify-center border-b border-gray-700">
            <!-- Placeholder for Logo -->
            <div class="bg-white rounded-full h-12 w-12 flex items-center justify-center overflow-hidden">
                <span class="text-xs text-black font-bold text-center">LOGO</span>
            </div>
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
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="h-20 bg-white border-b border-gray-200 flex items-center px-8 z-10">
            <h1 class="text-xl text-gray-700 font-semibold">@yield('header_title', 'Admin Dashboard')</h1>
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
</body>
</html>

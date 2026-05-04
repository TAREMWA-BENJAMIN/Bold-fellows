@extends('layouts.admin')

@section('header_title')
    Manage Frontend Content - {{ $section }}
@endsection

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.manage-pages') }}" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
        <i class="fas fa-arrow-left mr-1"></i> Back to Sections
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm p-6 max-w-4xl">
    <h2 class="text-xl font-semibold text-gray-700 mb-6">Edit {{ $section }} Content</h2>

    <form action="{{ route('admin.update-section', $section) }}" method="POST">
        @csrf
        
        <!-- Example generic fields. In a real app, you might customize this based on the section -->
        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Main Title</label>
            <input type="text" name="main_title" value="{{ $contents['main_title']->value ?? '' }}" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Description / Content</label>
            <textarea name="description" rows="6" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ $contents['description']->value ?? '' }}</textarea>
            <p class="mt-1 text-xs text-gray-500">You can use HTML tags here if needed.</p>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection

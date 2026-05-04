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
        
        @if(empty($schema))
            <div class="mb-5 p-4 bg-yellow-50 text-yellow-700 rounded-md">
                No editable fields defined for this section yet.
            </div>
        @else
            @foreach($schema as $key => $field)
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-2">{{ $field['label'] }}</label>
                    @if($field['type'] == 'textarea')
                        <textarea name="{{ $key }}" rows="6" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ $contents[$key]->value ?? ($field['default'] ?? '') }}</textarea>
                    @else
                        <input type="{{ $field['type'] }}" name="{{ $key }}" value="{{ $contents[$key]->value ?? ($field['default'] ?? '') }}" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @endif
                </div>
            @endforeach
        @endif

        <div class="flex justify-end">
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection

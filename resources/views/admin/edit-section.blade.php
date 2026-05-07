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

    <form action="{{ route('admin.update-section', $section) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(empty($schema))
            <div class="mb-5 p-4 bg-yellow-50 text-yellow-700 rounded-md">
                No editable fields defined for this section yet.
            </div>
        @else
            @php
                // Separate image fields from text fields for grouping
                $imageFields = collect($schema)->filter(fn($f) => $f['type'] === 'image');
                $textFields  = collect($schema)->filter(fn($f) => $f['type'] !== 'image');
            @endphp

            {{-- ── Text / Textarea fields ──────────────────────────────── --}}
            @if($textFields->isNotEmpty())
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-4 pb-2 border-b border-gray-100">
                    <i class="fas fa-align-left mr-1"></i> Text Content
                </h3>
                @foreach($textFields as $key => $field)
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">{{ $field['label'] }}</label>
                        @if($field['type'] == 'textarea')
                            <textarea name="{{ $key }}" rows="4"
                                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">{{ $contents[$key]->value ?? ($field['default'] ?? '') }}</textarea>
                        @else
                            <input type="{{ $field['type'] }}" name="{{ $key }}"
                                value="{{ $contents[$key]->value ?? ($field['default'] ?? '') }}"
                                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        @endif
                    </div>
                @endforeach
            @endif

            {{-- ── Image fields ─────────────────────────────────────────── --}}
            @if($imageFields->isNotEmpty())
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mt-8 mb-4 pb-2 border-b border-gray-100">
                    <i class="fas fa-image mr-1"></i> Images
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($imageFields as $key => $field)
                        @php
                            $savedPath   = $contents[$key]->value ?? null;
                            $defaultPath = $field['default'] ?? null;
                            $previewSrc  = $savedPath
                                ? asset($savedPath)
                                : ($defaultPath ? asset($defaultPath) : null);
                        @endphp
                        <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                <i class="fas fa-image text-indigo-400 mr-1"></i>
                                {{ $field['label'] }}
                            </label>

                            {{-- Current / preview image --}}
                            @if($previewSrc)
                                <div class="mb-3 rounded overflow-hidden border border-gray-200 bg-white" style="height:140px;">
                                    <img id="preview_{{ $key }}"
                                         src="{{ $previewSrc }}"
                                         alt="{{ $field['label'] }}"
                                         class="w-full h-full object-cover"
                                         onerror="this.src='{{ asset('images/portfolio/why-cyber-sec-africa.jpg') }}'">
                                </div>
                            @else
                                <div id="preview_{{ $key }}_wrap"
                                     class="mb-3 rounded border-2 border-dashed border-gray-300 bg-white flex items-center justify-center"
                                     style="height:140px;">
                                    <span class="text-gray-400 text-xs"><i class="fas fa-image mr-1"></i>No image yet</span>
                                </div>
                            @endif

                            {{-- Status badge --}}
                            <div class="mb-2">
                                @if($savedPath)
                                    <span class="inline-flex items-center gap-1 text-xs text-green-700 bg-green-50 border border-green-200 rounded px-2 py-0.5">
                                        <i class="fas fa-check-circle"></i> Custom image saved
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 text-xs text-amber-700 bg-amber-50 border border-amber-200 rounded px-2 py-0.5">
                                        <i class="fas fa-info-circle"></i> Using default image
                                    </span>
                                @endif
                            </div>

                            {{-- File input --}}
                            <label class="cursor-pointer block">
                                <div class="flex items-center gap-2 border border-gray-300 bg-white rounded-md px-3 py-2 text-sm text-gray-600 hover:border-indigo-400 hover:text-indigo-600 transition-colors">
                                    <i class="fas fa-upload text-indigo-400"></i>
                                    <span>Choose new image…</span>
                                </div>
                                <input type="file"
                                       name="{{ $key }}"
                                       accept="image/*"
                                       class="sr-only"
                                       onchange="previewImage(this, 'preview_{{ $key }}')">
                            </label>
                            <p class="text-xs text-gray-400 mt-1">JPG, PNG, GIF, WebP — replaces current image on save</p>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="flex justify-end mt-8">
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors flex items-center gap-2">
                <i class="fas fa-save"></i> Save Changes
            </button>
        </div>
    </form>
</div>

<script>
function previewImage(input, previewId) {
    if (!input.files || !input.files[0]) return;
    const reader = new FileReader();
    reader.onload = function(e) {
        // Try to find an existing <img> with that id
        let img = document.getElementById(previewId);
        if (img && img.tagName === 'IMG') {
            img.src = e.target.result;
        } else {
            // If it was the placeholder wrap, replace it
            let wrap = document.getElementById(previewId + '_wrap');
            if (wrap) {
                const newImg = document.createElement('img');
                newImg.id  = previewId;
                newImg.src = e.target.result;
                newImg.className = 'w-full h-full object-cover';
                newImg.alt = 'Preview';
                wrap.replaceWith(newImg.outerHTML);
                // re-inject as a proper element
                document.getElementById(previewId).src = e.target.result;
            }
        }
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
@endsection

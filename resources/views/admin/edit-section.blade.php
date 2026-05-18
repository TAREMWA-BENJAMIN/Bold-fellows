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

{{-- Success message --}}
@if(session('success'))
    <div class="mb-4 flex items-center gap-2 bg-green-50 border border-green-200 text-green-700 text-sm rounded-md px-4 py-3">
        <i class="fas fa-check-circle"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

{{-- Warning message (e.g. image upload errors) --}}
@if(session('warning'))
    <div class="mb-4 flex items-center gap-2 bg-amber-50 border border-amber-200 text-amber-700 text-sm rounded-md px-4 py-3">
        <i class="fas fa-exclamation-triangle"></i>
        <span>{{ session('warning') }}</span>
    </div>
@endif

<div class="bg-white rounded-lg shadow-sm p-6 max-w-4xl">
    <h2 class="text-xl font-semibold text-gray-700 mb-6">Edit {{ $section }} Content</h2>

    <form id="main-form" action="{{ route('admin.update-section', $slug) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(empty($schema))
            <div class="mb-5 p-4 bg-yellow-50 text-yellow-700 rounded-md">
                No editable fields defined for this section yet.
            </div>
        @else
            @php
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
                            <div class="mb-3 rounded overflow-hidden border border-gray-200 bg-white relative" style="height:140px;">
                                @if($previewSrc)
                                    <img id="preview_{{ $key }}"
                                         src="{{ $previewSrc }}"
                                         alt="{{ $field['label'] }}"
                                         class="w-full h-full object-cover">
                                @else
                                    <img id="preview_{{ $key }}"
                                         src=""
                                         alt="{{ $field['label'] }}"
                                         class="w-full h-full object-cover hidden">
                                    <div id="preview_{{ $key }}_placeholder"
                                         class="absolute inset-0 flex items-center justify-center border-2 border-dashed border-gray-300 bg-white rounded">
                                        <span class="text-gray-400 text-xs"><i class="fas fa-image mr-1"></i>No image yet</span>
                                    </div>
                                @endif
                            </div>

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

                            {{-- File input — triggers modal on change --}}
                            <label class="cursor-pointer block">
                                <div class="flex items-center gap-2 border border-gray-300 bg-white rounded-md px-3 py-2 text-sm text-gray-600 hover:border-indigo-400 hover:text-indigo-600 transition-colors">
                                    <i class="fas fa-upload text-indigo-400"></i>
                                    <span>Choose new image…</span>
                                </div>
                                <input type="file"
                                       id="file_{{ $key }}"
                                       name="{{ $key }}"
                                       accept="image/*"
                                       class="sr-only"
                                       onchange="openImageModal(this, '{{ $key }}', '{{ addslashes($field['label']) }}')">
                            </label>
                            <p class="text-xs text-gray-400 mt-1">JPG, PNG, GIF, WebP — click "Choose" then confirm in the popup</p>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="flex justify-end mt-8">
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors flex items-center gap-2">
                <i class="fas fa-save"></i> Save All Changes
            </button>
        </div>
    </form>
</div>

{{-- ─────────────────────────────────────────────────────────────
     IMAGE CONFIRM MODAL — Elegant Design
────────────────────────────────────────────────────────────── --}}
<div id="image-modal"
     class="fixed inset-0 z-50 hidden items-center justify-center p-4"
     style="background: rgba(15, 23, 42, 0.7); backdrop-filter: blur(6px);">

    <div id="modal-card"
         class="bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden"
         style="transform: scale(0.92); opacity: 0; transition: transform 0.22s cubic-bezier(.34,1.56,.64,1), opacity 0.18s ease;">

        {{-- ── Gradient Header ── --}}
        <div style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);" class="px-6 py-5">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center">
                        <i class="fas fa-cloud-upload-alt text-white text-base"></i>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-base leading-tight">Upload Image</p>
                        <p id="modal-field-label" class="text-indigo-200 text-xs mt-0.5"></p>
                    </div>
                </div>
                <button onclick="closeImageModal()"
                        class="w-8 h-8 rounded-full bg-white/15 hover:bg-white/30 flex items-center justify-center transition-colors">
                    <i class="fas fa-times text-white text-sm"></i>
                </button>
            </div>
        </div>

        {{-- ── Image Preview ── --}}
        <div class="px-6 pt-5 pb-4">
            <div class="relative rounded-xl overflow-hidden border border-gray-100 shadow-inner bg-gray-50"
                 style="height: 230px;">
                <img id="modal-preview"
                     src=""
                     alt="Preview"
                     class="w-full h-full object-cover hidden">
                <div id="modal-preview-placeholder"
                     class="absolute inset-0 flex flex-col items-center justify-center gap-2 text-gray-300">
                    <i class="fas fa-image text-5xl"></i>
                    <span class="text-sm">Loading preview…</span>
                </div>
                {{-- Subtle overlay badge --}}
                <div id="modal-ready-badge"
                     class="absolute bottom-3 right-3 hidden items-center gap-1.5 bg-black/50 text-white text-xs rounded-full px-3 py-1 backdrop-blur-sm">
                    <i class="fas fa-check-circle text-green-400"></i>
                    <span>Ready to upload</span>
                </div>
            </div>

            {{-- File info strip --}}
            <div class="mt-3 flex items-center gap-3 bg-gray-50 rounded-lg px-3 py-2.5 border border-gray-100">
                <div class="w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-file-image text-indigo-500 text-xs"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p id="modal-filename" class="text-sm font-medium text-gray-700 truncate"></p>
                    <p id="modal-filesize" class="text-xs text-gray-400 mt-0.5"></p>
                </div>
                <div class="flex-shrink-0">
                    <span class="text-xs bg-green-100 text-green-700 rounded-full px-2 py-0.5 font-medium">
                        <i class="fas fa-check mr-1"></i>Valid
                    </span>
                </div>
            </div>
        </div>

        {{-- ── Divider ── --}}
        <div class="h-px bg-gray-100 mx-6"></div>

        {{-- ── Action Buttons ── --}}
        <div class="flex gap-3 px-6 py-4">
            <button type="button"
                    onclick="closeImageModal()"
                    class="flex-1 border border-gray-200 text-gray-500 hover:border-gray-300 hover:text-gray-700 hover:bg-gray-50 font-medium py-2.5 rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                <i class="fas fa-times text-xs"></i> Cancel
            </button>
            <button type="button"
                    id="modal-upload-btn"
                    onclick="confirmImageUpload()"
                    style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);"
                    class="flex-1 text-white font-semibold py-2.5 rounded-xl transition-all text-sm flex items-center justify-center gap-2 shadow-md hover:shadow-indigo-300 hover:shadow-lg hover:opacity-90 active:scale-95">
                <i class="fas fa-cloud-upload-alt"></i> Upload & Save
            </button>
        </div>
    </div>
</div>

<style>
#image-modal.modal-open #modal-card {
    transform: scale(1) !important;
    opacity: 1 !important;
}
</style>

<script>
let _activeFileKey = null;

function openImageModal(input, key, label) {
    if (!input.files || !input.files[0]) return;

    _activeFileKey = key;
    const file = input.files[0];

    // Show modal + animate in
    const modal = document.getElementById('image-modal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    // Trigger animation on next frame
    requestAnimationFrame(() => modal.classList.add('modal-open'));

    // Set meta
    document.getElementById('modal-field-label').textContent = label;
    document.getElementById('modal-filename').textContent = file.name;
    document.getElementById('modal-filesize').textContent = formatBytes(file.size);

    // Reset preview state
    const modalImg = document.getElementById('modal-preview');
    const placeholder = document.getElementById('modal-preview-placeholder');
    const badge = document.getElementById('modal-ready-badge');
    modalImg.classList.add('hidden');
    placeholder.classList.remove('hidden');
    badge.classList.add('hidden');
    badge.classList.remove('flex');

    // Load preview
    const reader = new FileReader();
    reader.onload = function(e) {
        modalImg.src = e.target.result;
        modalImg.classList.remove('hidden');
        placeholder.classList.add('hidden');
        badge.classList.remove('hidden');
        badge.classList.add('flex');

        // Update card thumbnail in background
        const cardImg = document.getElementById('preview_' + key);
        if (cardImg) {
            cardImg.src = e.target.result;
            cardImg.classList.remove('hidden');
            const ph = document.getElementById('preview_' + key + '_placeholder');
            if (ph) ph.style.display = 'none';
        }
    };
    reader.readAsDataURL(file);
}

function closeImageModal() {
    const modal = document.getElementById('image-modal');
    modal.classList.remove('modal-open');
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 200);

    // Clear the file input so it won't submit
    if (_activeFileKey) {
        const input = document.getElementById('file_' + _activeFileKey);
        if (input) input.value = '';
        _activeFileKey = null;
    }
}

function confirmImageUpload() {
    const modal = document.getElementById('image-modal');
    modal.classList.remove('modal-open');
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 150);

    // Loading state
    const btn = document.getElementById('modal-upload-btn');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Saving…';
    btn.disabled = true;
    btn.style.opacity = '0.8';

    document.getElementById('main-form').submit();
}

function formatBytes(bytes) {
    if (bytes < 1024) return bytes + ' B';
    if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
    return (bytes / 1048576).toFixed(1) + ' MB';
}

// Close on backdrop click
document.getElementById('image-modal').addEventListener('click', function(e) {
    if (e.target === this) closeImageModal();
});
</script>
@endsection


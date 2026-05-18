@extends('layouts.admin')

@section('header_title', 'View Inquiry')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.inquiries') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">
        <i class="fas fa-arrow-left mr-2"></i> Back to Inquiries
    </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden max-w-4xl">
    <div class="px-8 py-6 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">{{ $message->name }}</h2>
            <div class="text-sm text-gray-500 mt-1">
                <a href="mailto:{{ $message->email }}" class="text-indigo-600 hover:underline">{{ $message->email }}</a>
                @if($message->organization)
                    <span class="mx-2">&bull;</span> {{ $message->organization }}
                @endif
            </div>
        </div>
        <div class="text-right">
            <span class="text-sm text-gray-500 block">{{ $message->created_at->format('F j, Y') }}</span>
            <span class="text-xs text-gray-400 block">{{ $message->created_at->format('g:i A') }}</span>
        </div>
    </div>
    
    <div class="px-8 py-8">
        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-4">Message</h3>
        <div class="text-gray-800 leading-relaxed whitespace-pre-line">
            {{ $message->message }}
        </div>
    </div>
    
    <div class="px-8 py-4 bg-gray-50 border-t border-gray-200 flex justify-end">
        <form action="{{ route('admin.delete-inquiry', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded transition-colors flex items-center">
                <i class="fas fa-trash-alt mr-2"></i> Delete Message
            </button>
        </form>
    </div>
</div>
@endsection

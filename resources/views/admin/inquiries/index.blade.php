@extends('layouts.admin')

@section('header_title', 'Contact Inquiries')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gray-800">Recent Messages</h2>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full whitespace-nowrap">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($messages as $msg)
                <tr class="{{ $msg->is_read ? 'bg-white' : 'bg-blue-50' }} hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        @if(!$msg->is_read)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                New
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                Read
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        {{ $msg->name }}
                        @if($msg->organization)
                            <span class="block text-xs text-gray-500 font-normal">{{ $msg->organization }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        <a href="mailto:{{ $msg->email }}" class="text-indigo-600 hover:underline">{{ $msg->email }}</a>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $msg->created_at->format('M d, Y h:i A') }}
                    </td>
                    <td class="px-6 py-4 text-right text-sm font-medium">
                        <a href="{{ route('admin.view-inquiry', $msg->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">View</a>
                        
                        <form action="{{ route('admin.delete-inquiry', $msg->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                        <i class="fas fa-inbox text-4xl mb-4 text-gray-300"></i>
                        <p>No messages found in the inbox.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($messages->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $messages->links() }}
    </div>
    @endif
</div>
@endsection

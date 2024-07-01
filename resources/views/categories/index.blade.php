@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Categories</h1>
        <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-8">Create Category</a>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="min-w-full bg-white mt-4 mb-4">
            <thead class="bg-[#B3EFB2] top-1 text-black">
                <tr>
                    <th class="w-3/5 px-4 py-2">Title</th>
                    <th class="w-2/5 px-4 py-2">Description</th>
                    <th class="w-1/5 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="border px-4 py-2">{{ $category->title }}</td>
                        <td class="border px-4 py-2">{{ $category->description }}</td>
                        <td class="border px-4 py-2 flex space-x-2">
                            <a href="{{ route('categories.edit', $category->id) }}" class="bg-[#54defd] hover:bg-[#54defd] text-black font-bold py-2 px-4 rounded flex items-center">
                                <svg class="h-6 w-6 text-slate-900 mr-1" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-[#ff002b] hover:bg-[#ff002b] text-black font-bold py-2 px-4 rounded flex items-center">
                                    <svg class="h-6 w-6 text-slate-900 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6" />
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

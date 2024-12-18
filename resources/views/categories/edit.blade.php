<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Category</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Category Title:</label>
                <input type="text" id="title" name="title" value="{{ $category->title }}" class="form-input mt-1 block w-full" required autofocus>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Category Description:</label>
                <textarea id="description" name="description" class="form-textarea mt-1 block w-full" rows="4" required>{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update Category</button>
        </form>
    </div>
@endsection

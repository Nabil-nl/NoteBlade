<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
</head>

<body class="flex min-h-screen bg-gray-100">
    <aside class="bg-[#B3EFB2] w-[15%] min-h-screen">
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Categories</h2>
            <ul>
                @foreach ($categories as $category)
                <li><a href="{{ route('categories.show', $category->id) }}" class="block py-1 text-black hover:bg-[#7A9E7E]">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </aside>

    <main class="flex-1 p-[5rem]" x-data="{ showForm: false }">
        <button @click="showForm = true" title="Add Note" class="group cursor-pointer outline-none hover:rotate-90 duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="stroke-green-400 fill-none group-hover:fill-green-800 group-active:stroke-green-200 group-active:fill-green-600 group-active:duration-0 duration-300">
                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke-width="1.5"></path>
                <path d="M8 12H16" stroke-width="1.5"></path>
                <path d="M12 16V8" stroke-width="1.5"></path>
            </svg>
        </button>

        <!-- Form for creating a new note -->
        <section x-show="showForm" x-cloak class="max-w-md mx-auto p-8 bg-white shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Create Note</h1>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('notes.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Note Title:</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-input mt-1 block w-full" required autofocus>
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700">Note Content:</label>
                    <textarea id="content" name="content" class="form-textarea mt-1 block w-full" rows="4" required>{{ old('content') }}</textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create Note</button>
            </form>
            <button @click="showForm = false" class="mt-4 text-red-500 hover:underline">Cancel</button>
        </section>

        <!-- Card component for notes -->
        <div class="card top-[1.3rem] right-[3.3rem]" x-show="!showForm">
            <div class="flex items-center space-x-2">
                <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6" />
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                </svg>
                <a href="#" class="text-black">Delete</a>
            </div>
            <div class="flex items-center space-x-2 mt-2">
                <svg class="h-6 w-6 text-blue-700" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                </svg>
                <a href="#" class="text-black">Edit</a>
            </div>
        </div>

    </main>

   
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</body>

</html>

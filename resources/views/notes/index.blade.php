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
            <h2 class="text-lg font-bold mb-2 " id="category">Categories</h2>
            <ul>
                @foreach ($categories as $category)
                <li><a href="{{ route('categories.show', $category->id) }}" class="block py-1 text-black hover:bg-[#7A9E7E]" id="cat2">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </aside>


    <main class="flex-1 p-[5rem]" x-data="{ showForm: false, showContent: false }">
    <!-- Search Form -->
    <div class="flex justify-center mb-8">
        <div class="search flex items-center">
            <form method="GET" action="{{ route('notes.index') }}" class="flex items-center">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
                <input name="search" placeholder="Search" type="search" class="input ml-2" value="{{ request('search') }}">
            </form>
        </div>
    </div>

    <!-- Button to Add Note -->
    <button @click="showForm = true" title="Add Note" class="group cursor-pointer outline-none hover:rotate-90 duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="stroke-green-400 fill-none group-hover:fill-green-800 group-active:stroke-green-200 group-active:fill-green-600 group-active:duration-0 duration-300">
            <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke-width="1.5"></path>
            <path d="M8 12H16" stroke-width="1.5"></path>
            <path d="M12 16V8" stroke-width="1.5"></path>
        </svg>
    </button>

    <!-- Form for Creating a New Note -->
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
            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <select id="category" name="category_id" class="form-select mt-1 block w-full" required>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create Note</button>
        </form>
        <button @click="showForm = false" class="mt-4 text-red-500 hover:underline">Cancel</button>
    </section>

    <!-- Displaying Cards for Each Note -->
    <div class="grid grid-cols-4 gap-4 mt-4">
        @foreach ($notes as $note)
        <div class="card p-4 bg-white shadow-md rounded-lg">
            <div class="mt-4">
                <h2 class="text-black flex justify-center items-center " id="h22">{{ $note->title }}</h2>
            </div>
            <div class="flex items-center space-x-2 mt-4">
                <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6" />
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                </svg>
                <form method="POST" action="{{ route('notes.destroy', $note->id) }}" onsubmit="return confirm('Are you sure you want to delete this note?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-black hover:text-red-500">Delete</button>
                </form>
            </div>
            <div class="flex items-center space-x-2 mt-2">
                <svg class="h-6 w-6 text-blue-700" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                </svg>
                <a href="{{ route('notes.edit', $note->id) }}" class="text-black hover:text-blue-700">Edit</a>
            </div>
            <div class="flex items-center space-x-2 mt-2">
                <svg class="h-6 w-6 text-green-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                    <circle cx="12" cy="12" r="3" />
                </svg>
                <a href="#" @click="showContent = {{ $note->id }}" class="text-black hover:text-green-500">Show</a>
            </div>
            <!-- Modal for Displaying Note Content -->
            <div x-show="showContent === {{ $note->id }}" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50" x-cloak>
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full">
                    <h2 class="text-xl text-black font-bold mb-4">{{ $note->title }}</h2>
                    <p class="text-black">Content: {{ $note->content }}</p>
                    <p class="text-black">Category: <span class="font-bold">{{ optional($note->category)->title }}</span></p>
                    <button @click="showContent = null" class="mt-4 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Close</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</body>

</html>
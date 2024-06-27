@extends('layouts.app')

@section('content')
    <h1>Search Results for "{{ $searchTerm }}"</h1>
    @if ($notes->isEmpty())
        <p>No notes found.</p>
    @else
        @foreach ($notes as $note)
            <div>
                <h2>{{ $note->title }}</h2>
                <p>{{ $note->content }}</p>
                <p><strong>Category:</strong> {{ $note->category->name }}</p>
            </div>
            <hr>
        @endforeach
    @endif
@endsection

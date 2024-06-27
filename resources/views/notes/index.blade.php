@extends('layouts.app')

@section('content')
    <h1>All Notes</h1>
    @foreach ($notes as $note)
        <div>
            <h2>{{ $note->title }}</h2>
            <p>{{ $note->content }}</p>
            <p><strong>Category:</strong> {{ $note->category->name }}</p>
        </div>
        <hr>
    @endforeach
@endsection

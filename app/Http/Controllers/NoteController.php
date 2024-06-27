<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        // Fetch all notes with their associated category
        $notes = Note::with('category')->get();
        return view('notes.index', compact('notes'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->query('q');
        $notes = Note::where('title', 'like', "%$searchTerm%")
                     ->orWhere('content', 'like', "%$searchTerm%")
                     ->with('category')
                     ->get();

        return view('notes.search', compact('notes', 'searchTerm'));
    }
}

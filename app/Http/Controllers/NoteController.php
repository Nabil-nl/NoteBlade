<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $notes = Note::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
        })->get();

        $categories = Category::all();

        return view('notes.index', compact('notes', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('notes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $user_id = Auth::id(); // Retrieve the authenticated user's ID

        // Debugging: Check if the user ID is correctly retrieved
        if (!$user_id) {
            return redirect()->route('notes.index')->with('error', 'User is not authenticated.');
        }

        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => $user_id, // Associate the note with the authenticated user
        ]);

        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }



    public function edit(Note $note)
    {
        $categories = Category::all();
        return view('notes.edit', compact('note', 'categories'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }
}

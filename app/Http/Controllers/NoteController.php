<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Category;

class NoteController extends Controller
{
    /**
     * Display a listing of the notes.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        $notes = Note::all();
    
        return view('notes.index', compact('categories', 'notes'));
    }
    

    /**
     * Show the form for creating a new note.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('notes.create', compact('categories'));
    }

    /**
     * Store a newly created note in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id, // Ensure this matches the name attribute in your form
        ]);

        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }

    /**
     * Show the form for editing the specified note.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\View\View
     */
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

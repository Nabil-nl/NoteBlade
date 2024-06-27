<?php
// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Display a form to create a new category
    public function create()
    {
        return view('categories.create');
    }

    // Store a newly created category in storage
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Create the category
        $category = Category::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect back with a success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    // Show the form for editing the specified category
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Update the specified category in storage
    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Update the category
        $category = Category::findOrFail($id);
        $category->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Optionally, you can add a success message or redirect
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Remove the specified category from storage
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        // Optionally, you can add a success message or redirect
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    // Display a listing of the categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
}

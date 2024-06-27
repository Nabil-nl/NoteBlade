<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Logic to fetch all categories from the database
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
}

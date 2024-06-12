<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News_item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index',['categories' => $categories]);
    }

    public function create()
    {
        $News_Items = News_item::all();

        return view('category.create', compact('News_Items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Category::create($request->all());

        return redirect()->route('category');
    }

    public function edit(Category $category)
    {
        $News_Items = News_item::all();

        return view('category.edit', compact('category', 'News_Items'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('category');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category');
    }

    
}

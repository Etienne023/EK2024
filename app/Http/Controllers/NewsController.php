<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News_item;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        $newsItems = News_item::all();
        $categories = Category::all();
        $user = User::all();

        return view('news.index', ['newsItems' => $newsItems], ['categories' => $categories], ['user' => $user]);
    }

    public function create()
    {

        $tags = Tag::all();
        $categories = Category::all();

        return view('news.create', ['tags' => $tags], ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,category_id',
        ]);
        $data['user_id'] = auth()->id();

        $newsItem = News_item::create($data);

        $newsItem->tags()->sync($request->tag_id);

        return redirect()->route('news');
    }

    public function edit($id)
    {
        $newsitem = News_item::find($id);
        $categories = Category::all();
        $users = User::all();
        $tags = Tag::all();

        return view('news.edit', compact('newsitem', 'categories', 'users', 'tags'));
    }

    public function update(Request $request, News_item $news)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,category_id',
            'user_id' => 'required|exists:users,id',
            'tag_id' => 'required|array|min:1',
        ]);


        $data['user_id'] = auth()->id();

        $news->update($data);

        $news->tags()->sync($request->tag_id);

        return redirect()->route('news');
    }

    public function destroy(News_item $news)
    {

        $news->tags()->detach();

        $news->delete();

        return redirect()->route('news');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {

        $tags = Tag::all();

        return view('tag.index',['tags' => $tags]);
    }

    public function create()
    {
        return view('tag.create');
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    public function store(Request $request)
    {

        
       $data = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
        ]);

       Tag::create($data);

        return redirect()->route('tag');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag');
    }

    public function update(Request $request, Tag $tag)
    {
        $data = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
        ]);

        $tag->update($data);

        return redirect()->route('tag');
    }
}

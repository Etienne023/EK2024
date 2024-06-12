@extends('layouts.app')

@section('content')
<div class="w-1/2 mx-auto p-4">
    <h1 class="text-xl text-white ">Create a News item</h1>

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md">
        @csrf

        <div class="form-group mb-4">
            <label for="title" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Title</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" required>
        </div>

        <div class="form-group mb-4">
            <label for="description" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Description</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" required></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="category_id" class=" block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Category</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category_id" name="category_id" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->category_id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        
        <div class="form-group mb-4">
            <label for="tag_id" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Tag</label>
            <select multiple class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tag_id" name="tag_id[]" required>
                @foreach($tags as $tag)
                    <option value="{{ $tag->tag_id }}">{{ $tag->Title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
    </form>
</div>
@endsection
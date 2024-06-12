@extends('layouts.app')

@section('content')
<div class="w-1/2 mx-auto p-4">
    <h1 class="text-xl text-white ">Create a Tag</h1>

    <form action="{{ route('tag.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md">
        @csrf


        <div class="form-group mb-4">
            <label for="Title" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Title</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Title" name="Title" required>
        </div>

        <div class="form-group mb-4">
            <label for="Description" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Description</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Description" name="Description" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
    </form>
</div>
@endsection
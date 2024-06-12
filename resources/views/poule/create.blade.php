@extends('layouts.app')

@section('content')
<div class="w-1/2 mx-auto p-4"> 
    <h1 class="text-xl text-white ">Create a Poule</h1>

    <form action="{{ route('poule.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md">
        @csrf

        <div class="form-group mb-4">
            <label for="name" class=" block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Name</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" required>
        </div>

        <div class="form-group mb-4">
            <label for="crest" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Crest</label>
            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-100 leading-tight focus:outline-none focus:shadow-outline" id="crest" name="crest" required>
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="w-1/2 mx-auto p-4">
    <h1 class="text-xl text-white ">Create a Player</h1>

    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md">
        @csrf

        <div class="form-group mb-4">
            <label for="firstname" class=" block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Firstname</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" name="firstname" required>
        </div>
        <div class="form-group mb-4">
            <label for="infix" class=" block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Infix</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="infix" name="infix">
        </div>
        <div class="form-group mb-4">
            <label for="surname" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">surname</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="surname" name="surname" required>
        </div>

        <div class="form-group mb-4">
            <label for="jerseynumber" class=" block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Jersey Number</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jerseynumber" name="jerseynumber" required>
        </div>

        <div class="form-group mb-4">
            <label for="position" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Position</label>
            <select name="position" id="position" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Select a position</option>
                <option value="Goalkeeper">Goalkeeper</option>
                <option value="Defender">Defender</option>
                <option value="Midfielder">Midfielder</option>
                <option value="Forward">Forward</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <label for="crest" class="block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Crest</label>
            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-100 leading-tight focus:outline-none focus:shadow-outline" id="crest" name="crest" required>
        </div>


        <div class="form-group mb-4">
            <label for="team_id" class=" block text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">Team</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="team_id" name="team_id" required>
                <option value="">Select a Team</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
    </form>
</div>
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Player') }}
        </h2>
    </x-slot>
    @section('content')
    <form action="{{ route('players.update', $player->player_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $player->firstname) }}">
        </div>

        <div>
            <label for="infix">Infix</label>
            <input type="text" id="infix" name="infix" value="{{ old('infix', $player->infix) }}">
        </div>

        <div>
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" value="{{ old('surname', $player->surname) }}">
        </div>

        <div>
            <label for="jerseynumber">Jersey Number</label>
            <input type="number" id="jerseynumber" name="jerseynumber" value="{{ old('jerseynumber', $player->jerseynumber) }}">
        </div>

        <div>
            <label for="position">Position</label>
            <input type="text" id="position" name="position" value="{{ old('position', $player->position) }}">
        </div>

        <div>
            <label for="crest">Crest</label>
            <input type="file" id="crest" name="crest">
        </div>

        <div>
            <label for="team_id">Team</label>
            <select id="team_id" name="team_id">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ (old('team_id', $player->team_id) == $team->id) ? 'selected' : '' }}>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update Player</button>
    </form>
    @endsection
</x-app-layout>
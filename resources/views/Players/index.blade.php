<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hier zie je alle spelers') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">First Name</th>
                                    <th class="px-4 py-2">Infix</th>
                                    <th class="px-4 py-2">Surname</th>
                                    <th class="px-4 py-2">position</th>
                                    <th class="px-4 py-2">Team</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($players as $player)
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('players.show', $player->player_id) }}">
                                                {{ $player->firstname }}
                                            </a>
                                        </td>
                                        <td class="border px-4 py-2">{{ $player->infix }}</td>
                                        <td class="border px-4 py-2">{{ $player->surname }}</td>
                                        <td class="border px-4 py-2">{{ $player->position }}</td>
                                        <td class="border px-4 py-2">{{ $player->team->name }}</td>
                                        <td class="text-center"><a href="{{ route('players.edit', $player->player_id) }}">Edit Player</a></td>
                                        <td class="text-center">
                                            <form action="{{ route('players.destroy', $player->player_id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete Player</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
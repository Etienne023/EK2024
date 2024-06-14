<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('poules') }}
            </h2>
            <a href="{{ route('Poule.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Poule</a>
        </div>
    </x-slot>
    
    modify the code 

    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Participants</th>
                                    <th class="px-4 py-2">Owner</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($poules as $poule)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $poule->name }}</td>
                                        <td class="border px-4 py-2">
                                            @foreach($poule->teams as $team)
                                                {{ $team->name }}
                                            @endforeach
                                        </td>
                                        <td class="border px-4 py-2">{{$poule->user->name}}</td>
                                        <td class="text-center"><a href="{{ route('poule.edit', $poule->id) }}">Edit Player</a></td>
                                        <td class="text-center">
                                            <form action="{{ route('poule.destroy', $poule->id) }}" method="POST">
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
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' teams') }}
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
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">TLA</th>
                                    <th class="px-4 py-2">Website</th>
                                    <th class="px-4 py-2">Pool</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('teams.show', $team->id) }}">
                                                {{ $team->name }}
                                            </a>
                                        </td>
                                        <td class="border px-4 py-2">{{ $team->tla }}</td>
                                        <td class="border px-4 py-2">{{ $team->website }}</td>
                                        <td class="border px-4 py-2">{{ $team->poules->name }}</td>
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
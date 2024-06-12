<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $player->firstname }} {{ $player->infix }} {{ $player->surname }}
        </h2>
    </x-slot>

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>First Name: {{ $player->firstname }}</p>
                    <p>Infix: {{ $player->infix }}</p>
                    <p>Surname: {{ $player->surname }}</p>
                    <p>Position: {{ $player->position }}</p>
                    <p>jerseynumber: {{ $player->jerseynumber }}</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
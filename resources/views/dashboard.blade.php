<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welkom bij de voetball app') }}
        </h2>
    </x-slot>

    @section('content')
        <!-- Main Content -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- Latest News Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold mb-2">{{ __('Latest News') }}</h3>
                        @foreach ($NewsItems as $NewsItem)
                            <div class="mb-4">
                                <h4 class="font-bold">{{ $NewsItem->title }}</h4>
                                <p>{{ $NewsItem->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- User Statistics Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __('Teams in first poule') }}</h3>
                        @foreach ($teams as $team)
                            <div class="mb-4">
                                <h4 class="font-bold">{{ $team->name }}</h4>
                                <a href="{{ $team->website }}">{{ $team->website }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Community Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __('Top Players for Germany') }}</h3>
                        @foreach ($players as $player)
                        <div class="mb-4">
                            <h4 class="font-bold">{{ $player->surname }}</h4>
                            <p>{{ $player->position }}</p>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>

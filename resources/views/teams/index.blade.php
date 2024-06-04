<x-app-layout>
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    @foreach ($teams as $team)
        <div class="px-4 py-2 mb-4 bg-white rounded shadow-md w-64">
            {{ $team->name }}
        </div>
    @endforeach
</div>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Poule') }}
        </h2>
    </x-slot>
    @section('content')
    <form action="{{ route('poules.update', $poule->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $poule->name) }}">
        </div>

        <div>
            <label for="crest">Crest</label>
            <input type="file" id="crest" name="crest">
        </div>

        <button type="submit">Update Poule</button>
    </form>
    @endsection
</x-app-layout>
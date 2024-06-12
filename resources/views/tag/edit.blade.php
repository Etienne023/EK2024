<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Tag') }}
        </h2>
    </x-slot>
    @section('content')
    <form action="{{ route('tag.update', $tag->tag_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" id="Title" name="Title" value="{{ old('Title', $tag->Title) }}">
        </div>

        <div>
            <label for="Description">Description</label>
            <textarea id="Description" name="Description">{{ old('Description', $tag->Description) }}</textarea>
        </div>

        <button type="submit">Update Tag</button>
    </form>
    @endsection
</x-app-layout>
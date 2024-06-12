<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit category') }}
        </h2>
    </x-slot>
    @section('content')
    <form action="{{ route('category.update', $category->category_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $category->title) }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $category->description) }}</textarea>
        </div>

        <button type="submit">Update News</button>
    </form>
    @endsection
</x-app-layout>
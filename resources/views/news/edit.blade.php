<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit News') }}
        </h2>
    </x-slot>
    @section('content')
    <form action="{{ route('news.update', $newsitem->news_item_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $newsitem->title) }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $newsitem->description) }}</textarea>
        </div>

        <div>
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ old('category_id', $newsitem->category_id) == $category->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tag_id">Tags</label>
            <select id="tag_id" name="tag_id[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->tag_id }}" {{ in_array($tag->tag_id, old('tag_id', $newsitem->tags->pluck('tag_id')->toArray())) ? 'selected' : '' }}>{{ $tag->Title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="user_id">User</label>
            <select id="user_id" name="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id', $newsitem->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update News</button>
    </form>
    @endsection
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hier zie je alle nieuws') }}
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
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">category</th>
                                    <th class="px-4 py-2">owner</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newsItems as $newsItem)
                                    <tr>
                                        <td class="border px-4 py-2">{{$newsItem->title }}</td>
                                        <td class="border px-4 py-2">{{$newsItem->description }}</td>
                                        <td class="border px-4 py-2">{{$newsItem->category->title }}</td>
                                        <td class="border px-4 py-2">{{$newsItem->user->name }}</td>
                                        <td class="text-center"><a href="{{ route('news.edit', $newsItem->news_item_id) }}">Edit</a></td>
                                        <td class="text-center">
                                            <form action="{{ route('news.destroy', $newsItem->news_item_id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
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

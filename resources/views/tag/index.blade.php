<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tags') }}
            </h2>
            <a href="{{ route('tag.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New tag</a>
        </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td class="border px-4 py-2">{{$tag->Title }}</td>
                                    <td class="border px-4 py-2">{{$tag->Description }}</td>
                                    <td class="text-center"><a href="{{ route('tag.edit', $tag->tag_id) }}">Edit tag</a></td>
                                    <td class="text-center">
                                        <form action="{{ route('tag.destroy', $tag->tag_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete tag</button>
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

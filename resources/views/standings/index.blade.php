<div>
    <x-app-layout>
        <div class="grid grid-cols-2 shadow-md relativeoverflow-x-auto sm:rounded-lg gap-7">
            @foreach($standings as $groupname => $group)
            <div class="w-max">
                <h2 class="m-3 text-xl text-center text-white">{{$groupname}}</h2>
                <table class="w-full text-left text-gray-500 w-fulltext-sm rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">P</th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Vlag</span>
                            </th>
                            @foreach($group as $standing)
                            <th scope="col" class="px-6 py-3">
                                {{$standing->team->name}}
                            </th>
                            @endforeach
                            <th scope="col" class="px-6 py-3">
                                a
                            </th>
                            <th scope="col" class="px-6 py-3">
                                P
                            </th>
                            <th scope="col" class="px-6 py-3">
                                G
                            </th>
                            <th scope="col" class="px-6 py-3">
                                W
                            </th>
                            <th scope="col" class="px-6 py-3">
                                G
                            </th>
                            <th scope="col" class="px-6 py-3">
                                V
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gv
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gt
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ds
                            </th>
    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($group as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    
                            <td class="p-4">
                                {{$loop->iteration}}
                            </td>
                            <td class="px-6 py-4">
                                tekst hier
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                tekst hier
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                @endforeach
            
        </div>
    </x-app-layout>
</div>

<x-app-layout>
    <section class="flex flex-col items-center pt-6">
        <div class="grid grid-cols-2 p-1 mb-4 text-center bg-white border border-gray-200 rounded-lg shadow w-1/2 sm:w-5/12 md:w-7/12 sm:p-4 dark:bg-gray-800 dark:border-gray-70">
            <div class="col">
                <div class="flex flex-col items-center justify-center text-right md:min-w-40 xl:min-w-72">
                    <h4 class="text-sm font-bold text-gray-900 sm:hidden">
                        {{ $team->tla }}
                    </h4>
                    <h5 class="hidden mb-2 font-bold text-right text-gray-900 dark:text-white sm:flex md:text-3xl xl:text-5xl ">
                        {{ $team->name }}
                    </h5>
                    <img src="{{ $team->crest}}" class="ml-3 mr-3 flags"/>
                </div>
            </div>
            <div class="col">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">website</h2>
                    <a href="{{ $team->website }}" class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-100">{{ $team->website }}</a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
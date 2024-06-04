<x-app-layout >
    <header class="flex justify-center main-content">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-100 dark:text-white">Update score</h1>
    </header>
 
    <form action="{{ route('games.update', $game) }}" method="post" class="flex justify-center">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-3 p-1 mb-4 text-center bg-white border border-gray-200 rounded-lg shadow w-fit sm:w-11/12 md:w-9/12 sm:p-8 dark:bg-gray-800 dark:border-gray-70" id="game_{{$game->id}}">
            <div class="col">
                <div id="home_team_game_{{$game->home_team->id}}" class="flex flex-col items-center justify-center text-right md:min-w-40 xl:min-w-72">
                    <h4 class="text-sm font-bold text-gray-900 sm:hidden">
                        {{$game->home_team->tla}}
                    </h4>
                    <h5 class="hidden mb-2 font-bold text-right text-gray-900 dark:text-white sm:flex md:text-3xl xl:text-5xl ">
                        {{$game->home_team->name}}
                    </h5>
                    <img src="{{$game->home_team->crest}}" class="ml-3 mr-3 flags"/>
                </div>
            </div>
            <div class="flex flex-col items-center col">
                <div class="text-base text-gray-500 sm:mb-2 sm:text-lg dark:text-gray-400">
                    {{\Carbon\Carbon::create($game->utcDate)->format('d-m-Y')}}
                </div>
                <div class="text-base text-gray-500 sm:mb-2 sm:text-lg dark:text-gray-400">
                    {{\Carbon\Carbon::create($game->utcDate)->format('H:i')}}
                </div>
                <div class="flex items">
                    <div class="w-1 sm:w-auto bg-yellow-300 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="text-left rtl:text-right">
                            <input name="scoreHomeFullTime" type="number" class="font-sans font-semibold text-gray-900 text-1xl md:text-2xl lg:txt-4l max-w-14">{{$game->scoreHomeFullTime}}</input>
                        </div>
                    </div>
                    <div>
                        -
                    </div>
                    <div class="w-1 sm:w-auto bg-yellow-300 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="text-left rtl:text-right">
                            <input name="scoreAwayFullTime" type="number" class="font-sans font-semibold text-gray-900 text-1xl md:text-2xl lg:txt-4l max-w-14">{{$game->scoreAwayFullTime}}</input>
                        </div>
                        
                    </div>
                </div>
                <div class="flex justify-center pt-4">
                    <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Save
                    </button>
                </div>
            </div>
            
            <div class="col">
                <div id="away_team_game_{{$game->away_team->id}}" class="flex flex-col items-center justify-center text-right md:min-w-40 xl:min-w-72">
                    <h4 class="text-sm font-bold text-gray-900 sm:hidden">
                        {{$game->away_team->tla}}
                    </h4>
                    <h5 class="hidden mb-2 font-bold text-right text-gray-900 dark:text-white sm:flex md:text-3xl xl:text-5xl ">
                        {{$game->away_team->name}}
                    </h5>
                    <img src="{{$game->away_team->crest}}" class="ml-3 mr-3 flags"/>
                </div>
            </div>
         
        </div>
      
    </form>
</x-app-layout>
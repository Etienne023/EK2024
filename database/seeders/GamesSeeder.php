<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $games = json_decode(file_get_contents(database_path('jsons/games.json')), true);

        foreach ($games['matches'] as $game) {
            
            if ($game['stage'] !== 'GROUP_STAGE') {
                continue;
            }
            Game::create(
                [

                    'utcDate' => \Carbon\Carbon::parse($game['utcDate'])->setTimezone('Europe/Paris')->toDateTimeString(),
                    'matchday' => $game['matchday'],
                    'stage' => $game['stage'],
                    'group' => $game['group'],
                    'homeTeam' => Team::where('tla', $game['homeTeam']['tla'])->first()->id,
                    'awayTeam' => Team::where('tla', $game['awayTeam']['tla'])->first()->id,
                    'winner' => $game['score']['winner'],
                    'scoreHomeHalfTime' => $game['score']['halfTime']['home'],
                    'scoreAwayHalfTime' => $game['score']['halfTime']['away'],
                    'scoreHomeFullTime' => $game['score']['fullTime']['home'],
                    'scoreAwayFullTime' => $game['score']['fullTime']['away'],
                ]
            );
        }
    }

}

<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $standings = json_decode(file_get_contents(database_path('jsons/standings.json')), true);

        foreach ($standings['standings'] as $group) {
            foreach ($group['table'] as $row) {
                DB::table('standings')->insert(
                    [
                        'group'          => $group['group'],
                        'position'       => $row['position'],
                        'team_id'        => Team::where('tla', $row['team']['tla'])->first()->id,
                        'playedGames'    => 0,
                        'won'            => 0,
                        'draw'           => 0,
                        'lost'           => 0,
                        'points'         => 0,
                        'goalsFor'       => 0,
                        'goalsAgainst'   => 0,
                        'goalDifference' => 0,
                    ]
                );
            }
        }
    }

}

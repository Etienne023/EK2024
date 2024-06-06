<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = json_decode(file_get_contents(database_path('jsons/teams.json')), true);

        foreach ($teams['teams'] as $team) {
            Team::create(
                [
                    'name' => $team['name'],
                    'tla' => $team['tla'],
                    'crest' => $team['crest'],
                    'website' => $team['website'],
                ]
            );
        }
    }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team_1 = Team::create([
            'team_name' => 'Ram Sharma',
            'team_address'  => 'Morang',
            'team_contact' => '9876543456',
            'team_image' => '',
            'team_facebook' => '',
        ]);
         $team_2 = Team::create([
            'team_name' => 'Ram Sharma',
            'team_address'  => 'Morang',
            'team_contact' => '9876543456',
            'team_image' => '',
            'team_facebook' => '',
        ]);
    }
}

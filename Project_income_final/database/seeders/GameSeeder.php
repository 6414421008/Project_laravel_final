<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'game_name' => 'Teraria',
                'game_type' => 'survival',
                'game_income' => '610',
                'game_email' => 'game505official@gmail.com'
            ],
            [
                'game_name' => 'Minecraft',
                'game_type' => 'survival',
                'game_income' => '1040',
                'game_email' => 'minecraft12official@gmail.com'
            ],
            [
                'game_name' => 'Valley',
                'game_type' => 'survival',
                'game_income' => '134',
                'game_email' => 'Valley78official@gmail.com'
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::insert([
            [
                'title' => 'Money Market',
                'description' => '
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, 
                    in facilisis urna. Fusce sit amet consequat est.
                ',
                'created_at' => now(),
            ],
            [
                'title' => 'Umrah',
                'description' => '
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, 
                    in facilisis urna. Fusce sit amet consequat est.
                ',
                'created_at' => now(),
            ]
        ]);
    }
}

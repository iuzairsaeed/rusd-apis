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
                'name' => 'Money Market',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, in facilisis urna. Fusce sit amet consequat est.',
                'type' => 'investment',
                'created_at' => now(),
            ],
            [
                'name' => 'Sukuk',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, in facilisis urna. Fusce sit amet consequat est.',
                'type' => 'dream',
                'created_at' => now(),
            ],
            [
                'name' => 'Real Estate',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, in facilisis urna. Fusce sit amet consequat est.',
                'type' => 'investment',
                'created_at' => now(),
            ],
        ]);
    }
}

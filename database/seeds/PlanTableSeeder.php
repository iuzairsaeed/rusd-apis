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
                'parent_id' => 0,
                'created_at' => now(),
            ],
            [
                'name' => 'Umrah',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, in facilisis urna. Fusce sit amet consequat est.',
                'type' => 'goal',
                'parent_id' => 0,
                'created_at' => now(),
            ],
            [
                'name' => 'Saving Plan with Umrah Packages',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, in facilisis urna. Fusce sit amet consequat est.',
                'type' => 'umrah',
                'parent_id' => 2,
                'created_at' => now(),
            ],
            [
                'name' => 'Saving Plan Only',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque dignissim iaculis. Etiam quis tempor metus, in facilisis urna. Fusce sit amet consequat est.',
                'type' => 'umrah',
                'parent_id' => 2,
                'created_at' => now(),
            ],
        ]);
    }
}

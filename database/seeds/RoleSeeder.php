<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'user','display_name'=>'User']);
        Role::create(['name'=>'admin','display_name'=>'Admin']);
    }
}

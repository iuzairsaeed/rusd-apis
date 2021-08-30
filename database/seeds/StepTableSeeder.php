<?php

use Illuminate\Database\Seeder;
use App\Models\Step;

class StepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'Residency Details',"Your Tax & Citizenship Details","Income & Worth","Saving/ Investment Experience",
            "Document Upload","Security Questions","Security Settings"
        ];

        foreach ($array as $k => $value) {
            Step::create([
                'name'=>$value, 
                'step_no'=>++$k,
            ]);
        }

    }
}

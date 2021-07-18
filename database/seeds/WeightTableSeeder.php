<?php

use App\Weight;
use Illuminate\Database\Seeder;

class WeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /***
         * Weight
         *  *****/
     for($i=1;$i<=30;$i++){
        Weight::create([
            'weight' => $i
        ]);
    } 

    }
}

<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /**
         * States
         */
        State::create([
            'name' => 'Johor',
            'description' => 'Johor',
            'abbreviation' => 'JHR',
            'iso_code' => 'MY-01',
        ]);

        State::create([
            'name' => 'Kedah',
            'description' => 'Kedah',
            'abbreviation' => 'KDH',
            'iso_code' => 'MY-02',
        ]);

        State::create([
            'name' => 'Kelantan',
            'description' => 'Kelantan',
            'abbreviation' => 'KTN',
            'iso_code' => 'MY-03',
        ]);

        State::create([
            'name' => 'Melaka',
            'description' => 'Melaka',
            'abbreviation' => 'MLK',
            'iso_code' => 'MY-04',
        ]);

        State::create([
            'name' => 'Negeri Sembilan',
            'description' => 'Negeri Sembilan',
            'abbreviation' => 'NSN',
            'iso_code' => 'MY-05',
        ]);

        State::create([
            'name' => 'Pahang',
            'description' => 'Pahang',
            'abbreviation' => 'PHG',
            'iso_code' => 'MY-06',
        ]);

        State::create([
            'name' => 'Penang',
            'description' => 'Penang',
            'abbreviation' => 'PNG',
            'iso_code' => 'MY-07',
        ]);

        State::create([
            'name' => 'Perak',
            'description' => 'Perak',
            'abbreviation' => 'PRK',
            'iso_code' => 'MY-08',
        ]);

        State::create([
            'name' => 'Perlis',
            'description' => 'Perlis',
            'abbreviation' => 'PLS',
            'iso_code' => 'MY-09',
        ]);

        State::create([
            'name' => 'Sabah',
            'description' => 'Sabah',
            'abbreviation' => 'SBH',
            'iso_code' => 'MY-12',
        ]);

        State::create([
            'name' => 'Sarawak',
            'description' => 'Sarawak',
            'abbreviation' => 'SWK',
            'iso_code' => 'MY-13',
        ]);

        State::create([
            'name' => 'Selangor',
            'description' => 'Selangor',
            'abbreviation' => 'SGR',
            'iso_code' => 'MY-10',
        ]);

        State::create([
            'name' => 'Terengganu',
            'description' => 'Terengganu',
            'abbreviation' => 'TRG',
            'iso_code' => 'MY-11',
        ]);

        State::create([
            'name' => 'W.P Kuala Lumpur',
            'description' => 'W.P Kuala Lumpur',
            'abbreviation' => 'KUL',
            'iso_code' => 'MY-14',
        ]);

        State::create([
            'name' => 'W.P Labuan',
            'description' => 'W.P Labuan',
            'abbreviation' => 'LBN',
            'iso_code' => 'MY-15',
        ]);

        State::create([
            'name' => 'W.P Putrajaya',
            'description' => 'W.P Putrajaya',
            'abbreviation' => 'PJY',
            'iso_code' => 'MY-16',
        ]);

    }
}

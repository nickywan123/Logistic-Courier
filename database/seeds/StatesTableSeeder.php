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
        State::updateOrCreate([
            'name' => 'Johor',
            'description' => 'Johor',
            'iso_code' => 'MY-01',
        ],['abbreviation' => 'JHR']);

        State::updateOrCreate([
            'name' => 'Kedah',
            'description' => 'Kedah',
            'iso_code' => 'MY-02',
        ],[ 'abbreviation' => 'KDH']);

        State::updateOrCreate([
            'name' => 'Kelantan',
            'description' => 'Kelantan',
            'iso_code' => 'MY-03',
        ],['abbreviation' => 'KTN']);

        State::updateOrCreate([
            'name' => 'Melaka',
            'description' => 'Melaka',
            'iso_code' => 'MY-04',
        ],[ 'abbreviation' => 'MLK']);

        State::updateOrCreate([
            'name' => 'Negeri Sembilan',
            'description' => 'Negeri Sembilan',
            'iso_code' => 'MY-05',
        ],['abbreviation' => 'NSN']);

        State::updateOrCreate([
            'name' => 'Pahang',
            'description' => 'Pahang',
            'iso_code' => 'MY-06',
        ],[ 'abbreviation' => 'PHG']);

        State::updateOrCreate([
            'name' => 'Penang',
            'description' => 'Penang',
            'iso_code' => 'MY-07',
        ],['abbreviation' => 'PNG']);

        State::updateOrCreate([
            'name' => 'Perak',
            'description' => 'Perak',
            'iso_code' => 'MY-08',
        ],['abbreviation' => 'PRK']);

        State::updateOrCreate([
            'name' => 'Perlis',
            'description' => 'Perlis',
            'iso_code' => 'MY-09',
        ],[ 'abbreviation' => 'PLS']);

        State::updateOrCreate([
            'name' => 'Sabah',
            'description' => 'Sabah',
            'iso_code' => 'MY-12',
        ],['abbreviation' => 'SBH']);

        State::updateOrCreate([
            'name' => 'Sarawak',
            'description' => 'Sarawak',
            'iso_code' => 'MY-13',
        ], ['abbreviation' => 'SRW']);

        State::updateOrCreate([
            'name' => 'Selangor',
            'description' => 'Selangor',
            'iso_code' => 'MY-10',
        ],['abbreviation' => 'SGR']);

        State::updateOrCreate([
            'name' => 'Terengganu',
            'description' => 'Terengganu',
            'iso_code' => 'MY-11',
        ],['abbreviation' => 'TRG']);

        State::updateOrCreate([
            'name' => 'W.P Kuala Lumpur',
            'description' => 'W.P Kuala Lumpur',
            'iso_code' => 'MY-14',
        ],[ 'abbreviation' => 'KUL']);

        State::updateOrCreate([
            'name' => 'W.P Labuan',
            'description' => 'W.P Labuan',
            'iso_code' => 'MY-15',
        ],[ 'abbreviation' => 'LBN']);

        State::updateOrCreate([
            'name' => 'W.P Putrajaya',
            'description' => 'W.P Putrajaya',
            'iso_code' => 'MY-16',
        ],[ 'abbreviation' => 'PJY']);

    }
}

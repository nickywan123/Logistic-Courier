<?php

use App\Courier;
use Illuminate\Database\Seeder;

class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courier::create([
            'name' => 'POS LAJU',
            'courier_id' => 'EP-CR0A'
        ]);

        Courier::create([
            'name' => 'J&T Express',
            'courier_id' => 'EP-CR0DP'
        ]);

        Courier::create([
            'name' => 'SKY NET'
        ]);

        Courier::create([
            'name' => 'DHL Express',
            'courier_id' => 'EP-CR0C'
        ]);

        Courier::create([
            'name' => 'CJ LOGISTICS',
            'courier_id' => 'EP-CR0Z'
        ]);

        Courier::create([
            'name' => 'PGEON',
            'courier_id' => 'EP-CR0O'
        ]);

        Courier::create([
            'name' => 'ARAMEX',
            'courier_id' => 'EP-CR03'
        ]);

        Courier::create([
            'name' => 'ABX EXPRESS'
        ]);

        Courier::create([
            'name' => 'NATIONWIDE EXPRESS'
        ]);

        Courier::create([
            'name' => 'NINJA VAN'
        ]);
    }
}

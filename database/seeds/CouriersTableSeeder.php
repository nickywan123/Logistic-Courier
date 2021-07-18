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
            'name' => 'POS LAJU'
        ]);

        Courier::create([
            'name' => 'J&T Express'
        ]);

        Courier::create([
            'name' => 'SKY NET'
        ]);

        Courier::create([
            'name' => 'DHL'
        ]);

        Courier::create([
            'name' => 'CJ LOGISTICS'
        ]);

        Courier::create([
            'name' => 'PGEON'
        ]);

        Courier::create([
            'name' => 'ARAMEX'
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

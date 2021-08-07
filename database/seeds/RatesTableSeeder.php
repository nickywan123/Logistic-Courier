<?php

use App\Rate;
use Illuminate\Database\Seeder;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** 
         * Rate for Pos Laju
        */
        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 1,
            'cost' => 8.00,
            'location_id' => 1
        ],
        ['hub_cost'=>6.20]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 1,
            'cost' => 17.90,
            'location_id' => 2
        ],
        ['hub_cost'=>16.50]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 2,
            'cost' => 9.10,
            'location_id' => 1
        ],
        ['hub_cost'=>6.50]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 2,
            'cost' => 27.30,
            'location_id' => 2
        ],
        ['hub_cost'=>25.10]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 3,
            'cost' => 11.10,
            'location_id' => 1
        ],
        ['hub_cost'=>6.90]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 3,
            'cost' => 37.00,
            'location_id' => 2
        ],
        ['hub_cost'=>34.10]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 4,
            'cost' => 13.10,
            'location_id' => 1
        ],
        ['hub_cost'=>7.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 4,
            'cost' => 46.60,
            'location_id' => 2
        ],
        ['hub_cost'=>42.90]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 5,
            'cost' => 15.10,
            'location_id' => 1
        ],
        ['hub_cost'=>7.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 5,
            'cost' => 56.20,
            'location_id' => 2
        ],
        ['hub_cost'=>51.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 6,
            'cost' => 17.00,
            'location_id' => 1
        ],['hub_cost'=>15.60]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 6,
            'cost' => 65.90,
            'location_id' => 2
        ],['hub_cost'=>60.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 7,
            'cost' => 19.10,
            'location_id' => 1
        ],['hub_cost'=>17.60]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 7,
            'cost' => 75.50,
            'location_id' => 2
        ],['hub_cost'=>69.50]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 8,
            'cost' => 21.10,
            'location_id' => 1
        ],['hub_cost'=>19.40]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 8,
            'cost' => 85.20,
            'location_id' => 2
        ],['hub_cost'=>78.40]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 9,
            'cost' => 23.10,
            'location_id' => 1
        ],['hub_cost'=>21.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 9,
            'cost' => 94.80,
            'location_id' => 2
        ],['hub_cost'=>87.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 10,
            'cost' => 25.00,
            'location_id' => 1
        ],['hub_cost'=>23.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 10,
            'cost' => 104.50,
            'location_id' => 2
        ],['hub_cost'=>96.20]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 11,
            'cost' => 27.10,
            'location_id' => 1
        ],['hub_cost'=>24.90]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 11,
            'cost' => 114.10,
            'location_id' => 2
        ],['hub_cost'=>105.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 12,
            'cost' => 29.10,
            'location_id' => 1
        ],['hub_cost'=>26.80]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 12,
            'cost' => 123.80,
            'location_id' => 2
        ],['hub_cost'=>114.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 13,
            'cost' => 31.10,
            'location_id' => 1
        ],['hub_cost'=>28.60]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 13,
            'cost' => 133.40,
            'location_id' => 2
        ],['hub_cost'=>122.80]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 14,
            'cost' => 33.00,
            'location_id' => 1
        ],['hub_cost'=>30.40]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 14,
            'cost' => 143.10,
            'location_id' => 2
        ],['hub_cost'=>131.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 15,
            'cost' => 35.10,
            'location_id' => 1
        ],['hub_cost'=>32.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 15,
            'cost' => 152.70,
            'location_id' => 2
        ],['hub_cost'=>140.50]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 16,
            'cost' => 37.10,
            'location_id' => 1
        ],['hub_cost'=>34.10]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 16,
            'cost' => 162.40,
            'location_id' => 2
        ],['hub_cost'=>149.40]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 17,
            'cost' => 39.10,
            'location_id' => 1
        ],['hub_cost'=>36.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 17,
            'cost' => 172.00,
            'location_id' => 2
        ],['hub_cost'=>158.20]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 18,
            'cost' => 41.00,
            'location_id' => 1
        ],['hub_cost'=>37.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 18,
            'cost' => 181.70,
            'location_id' => 2
        ],['hub_cost'=>167.20]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 19,
            'cost' => 43.10,
            'location_id' => 1
        ],['hub_cost'=>39.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 19,
            'cost' => 191.30,
            'location_id' => 2
        ],['hub_cost'=>176.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 20,
            'cost' => 45.10,
            'location_id' => 1
        ],['hub_cost'=>41.50]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 20,
            'cost' => 201.00,
            'location_id' => 2
        ],['hub_cost'=>184.90]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 21,
            'cost' => 47.10,
            'location_id' => 1
        ],['hub_cost'=>43.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 21,
            'cost' => 210.60,
            'location_id' => 2
        ],['hub_cost'=>193.80]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 22,
            'cost' => 49.00,
            'location_id' => 1
        ],['hub_cost'=>45.10]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 22,
            'cost' => 220.30,
            'location_id' => 2
        ],['hub_cost'=>202.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 23,
            'cost' => 51.10,
            'location_id' => 1
        ],['hub_cost'=>47.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 23,
            'cost' => 229.90,
            'location_id' => 2
        ],['hub_cost'=>211.60]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 24,
            'cost' => 53.10,
            'location_id' => 1
        ],['hub_cost'=>48.90]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 24,
            'cost' => 239.60,
            'location_id' => 2
        ],['hub_cost'=>220.50]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 25,
            'cost' => 55.10,
            'location_id' => 1
        ],['hub_cost'=>50.70]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 25,
            'cost' => 249.20,
            'location_id' => 2
        ],['hub_cost'=>229.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 26,
            'cost' => 57.00,
            'location_id' => 1
        ],['hub_cost'=>52.40]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 26,
            'cost' => 258.90,
            'location_id' => 2
        ],['hub_cost'=>238.30]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 27,
            'cost' => 59.10,
            'location_id' => 1
        ],['hub_cost'=>54.40]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 27,
            'cost' => 268.50,
            'location_id' => 2
        ],['hub_cost'=>247.10]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 28,
            'cost' => 61.10,
            'location_id' => 1
        ],['hub_cost'=>56.20]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 28,
            'cost' => 278.20,
            'location_id' => 2
        ],['hub_cost'=>256.00]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 29,
            'cost' => 63.10,
            'location_id' => 1
        ],['hub_cost'=>58.10]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 29,
            'cost' => 287.80,
            'location_id' => 2
        ],['hub_cost'=>264.80]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 30,
            'cost' => 65.00,
            'location_id' => 1
        ],['hub_cost'=>59.80]);

        Rate::updateOrCreate([
            'courier_id' => 1,
            'weight' => 30,
            'cost' => 297.50,
            'location_id' => 2
        ],['hub_cost'=>273.70]);

       

        /**
         * Rates for J&T Express
         */

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 1,
            'cost' => 8.00,
            'location_id' => 1
        ],['hub_cost'=>6.20]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 1,
            'cost' => 22.20,
            'location_id' => 2
        ],['hub_cost'=>20.40]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 2,
            'cost' => 9.00,
            'location_id' => 1
        ],['hub_cost'=>6.40]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 2,
            'cost' => 37.90,
            'location_id' => 2
        ],['hub_cost'=>34.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 3,
            'cost' => 11.10,
            'location_id' => 1
        ],['hub_cost'=>6.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 3,
            'cost' => 53.50,
            'location_id' => 2
        ],['hub_cost'=>49.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 4,
            'cost' => 13.00,
            'location_id' => 1
        ],['hub_cost'=>12.00]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 4,
            'cost' => 69.30,
            'location_id' => 2
        ],['hub_cost'=>63.80]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 5,
            'cost' => 15.10,
            'location_id' => 1
        ],['hub_cost'=>13.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 5,
            'cost' => 85.00,
            'location_id' => 2
        ],['hub_cost'=>78.20]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 6,
            'cost' => 17.00,
            'location_id' => 1
        ],['hub_cost'=>15.60]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 6,
            'cost' => 102.00,
            'location_id' => 2
        ],['hub_cost'=>93.80]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 7,
            'cost' => 19.00,
            'location_id' => 1
        ],['hub_cost'=>17.50]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 7,
            'cost' => 117.70,
            'location_id' => 2
        ],['hub_cost'=>108.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 8,
            'cost' => 21.00,
            'location_id' => 1
        ],['hub_cost'=>19.40]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 8,
            'cost' => 133.30,
            'location_id' => 2
        ],['hub_cost'=>122.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 9,
            'cost' => 23.10,
            'location_id' => 1
        ],['hub_cost'=>21.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 9,
            'cost' => 149.10,
            'location_id' => 2
        ],['hub_cost'=>137.20]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 10,
            'cost' => 25.00,
            'location_id' => 1
        ],['hub_cost'=>23.00]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 10,
            'cost' => 164.80,
            'location_id' => 2
        ],['hub_cost'=>151.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 11,
            'cost' => 27.10,
            'location_id' => 1
        ],['hub_cost'=>24.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 11,
            'cost' => 181.70,
            'location_id' => 2
        ],['hub_cost'=>167.20]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 12,
            'cost' => 29.10,
            'location_id' => 1
        ],['hub_cost'=>26.80]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 12,
            'cost' => 197.40,
            'location_id' => 2
        ],['hub_cost'=>181.60]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 13,
            'cost' => 31.10,
            'location_id' => 1
        ],['hub_cost'=>28.60]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 13,
            'cost' => 213.10,
            'location_id' => 2
        ],['hub_cost'=>196.10]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 14,
            'cost' => 33.10,
            'location_id' => 1
        ],['hub_cost'=>30.50]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 14,
            'cost' => 228.90,
            'location_id' => 2
        ],['hub_cost'=>210.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 15,
            'cost' => 35.10,
            'location_id' => 1
        ],['hub_cost'=>32.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 15,
            'cost' => 244.60,
            'location_id' => 2
        ],['hub_cost'=>225.10]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 16,
            'cost' => 37.00,
            'location_id' => 1
        ],['hub_cost'=>34.10]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 16,
            'cost' => 260.30,
            'location_id' => 2
        ],['hub_cost'=>239.50]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 17,
            'cost' => 39.00,
            'location_id' => 1
        ],['hub_cost'=>35.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 17,
            'cost' => 275.90,
            'location_id' => 2
        ],['hub_cost'=>253.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 18,
            'cost' => 41.10,
            'location_id' => 1
        ],['hub_cost'=>37.80]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 18,
            'cost' => 291.60,
            'location_id' => 2
        ],['hub_cost'=>268.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 19,
            'cost' => 43.00,
            'location_id' => 1
        ],['hub_cost'=>39.60]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 19,
            'cost' => 307.50,
            'location_id' => 2
        ],['hub_cost'=>282.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 20,
            'cost' => 45.10,
            'location_id' => 1
        ],['hub_cost'=>41.50]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 20,
            'cost' => 323.10,
            'location_id' => 2
        ],['hub_cost'=>297.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 21,
            'cost' => 47.00,
            'location_id' => 1
        ],['hub_cost'=>43.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 21,
            'cost' => 340.10,
            'location_id' => 2
        ],['hub_cost'=>312.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 22,
            'cost' => 49.00,
            'location_id' => 1
        ],['hub_cost'=>45.10]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 22,
            'cost' => 355.70,
            'location_id' => 2
        ],['hub_cost'=>327.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 23,
            'cost' => 51.00,
            'location_id' => 1
        ],['hub_cost'=>46.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 23,
            'cost' => 371.40,
            'location_id' => 2
        ],['hub_cost'=>341.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 24,
            'cost' => 53.10,
            'location_id' => 1
        ],['hub_cost'=>48.90]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 24,
            'cost' => 387.30,
            'location_id' => 2
        ],['hub_cost'=>356.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 25,
            'cost' => 55.00,
            'location_id' => 1
        ],['hub_cost'=>50.60]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 25,
            'cost' => 402.90,
            'location_id' => 2
        ],['hub_cost'=>370.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 26,
            'cost' => 57.10,
            'location_id' => 1
        ],['hub_cost'=>52.50]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 26,
            'cost' => 418.60,
            'location_id' => 2
        ],['hub_cost'=>385.20]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 27,
            'cost' => 59.00,
            'location_id' => 1
        ],['hub_cost'=>54.30]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 27,
            'cost' => 434.30,
            'location_id' => 2
        ],['hub_cost'=>399.60]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 28,
            'cost' => 61.00,
            'location_id' => 1
        ],['hub_cost'=>56.10]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 28,
            'cost' => 450.00,
            'location_id' => 2
        ],['hub_cost'=>414.00]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 29,
            'cost' => 63.00,
            'location_id' => 1
        ],['hub_cost'=>58.00]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 29,
            'cost' => 465.70,
            'location_id' => 2
        ],['hub_cost'=>428.50]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 30,
            'cost' => 65.10,
            'location_id' => 1
        ],['hub_cost'=>60.70]);

        Rate::updateOrCreate([
            'courier_id' => 2,
            'weight' => 30,
            'cost' => 481.40,
            'location_id' => 2
        ],['hub_cost'=>442.90]);


        /**
         * Rates for SkyNet Express
         * 
         */

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 1,
            'cost' => 7.80,
            'location_id' => 1
        ],['hub_cost'=>6.40]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 1,
            'cost' => 26.00,
            'location_id' => 2
        ],['hub_cost'=>14.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 2,
            'cost' => 9.50,
            'location_id' => 1
        ],['hub_cost'=>7.50]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 2,
            'cost' => 47.30,
            'location_id' => 2
        ],['hub_cost'=>27.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 3,
            'cost' => 9.50,
            'location_id' => 1
        ],['hub_cost'=>7.50]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 3,
            'cost' => 68.60,
            'location_id' => 2
        ],['hub_cost'=>39.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 4,
            'cost' => 10.90,
            'location_id' => 1
        ],['hub_cost'=>8.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 4,
            'cost' => 89.80,
            'location_id' => 2
        ],['hub_cost'=>51.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 5,
            'cost' => 12.50,
            'location_id' => 1
        ],['hub_cost'=>8.90]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 5,
            'cost' => 111.10,
            'location_id' => 2
        ],['hub_cost'=>63.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 6,
            'cost' => 13.90,
            'location_id' => 1
        ],['hub_cost'=>10.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 6,
            'cost' => 132.30,
            'location_id' => 2
        ],['hub_cost'=>76.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 7,
            'cost' => 15.50,
            'location_id' => 1
        ],['hub_cost'=>11.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 7,
            'cost' => 153.60,
            'location_id' => 2
        ],['hub_cost'=>88.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 8,
            'cost' => 16.90,
            'location_id' => 1
        ],['hub_cost'=>11.40]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 8,
            'cost' => 174.90,
            'location_id' => 2
        ],['hub_cost'=>100.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 9,
            'cost' => 18.40,
            'location_id' => 1
        ],['hub_cost'=>11.70]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 9,
            'cost' => 196.10,
            'location_id' => 2
        ],['hub_cost'=>112.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 10,
            'cost' => 20.00,
            'location_id' => 1
        ],['hub_cost'=>12.00]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 10,
            'cost' => 217.40,
            'location_id' => 2
        ],['hub_cost'=>125.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 11,
            'cost' => 21.40,
            'location_id' => 1
        ],['hub_cost'=>13.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 11,
            'cost' => 238.60,
            'location_id' => 2
        ],['hub_cost'=>137.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 12,
            'cost' => 23.00,
            'location_id' => 1
        ],['hub_cost'=>14.20]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 12,
            'cost' => 259.90,
            'location_id' => 2
        ],['hub_cost'=>149.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 13,
            'cost' => 24.40,
            'location_id' => 1
        ],['hub_cost'=>15.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 13,
            'cost' => 281.20,
            'location_id' => 2
        ],['hub_cost'=>161.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 14,
            'cost' => 25.90,
            'location_id' => 1
        ],['hub_cost'=>16.40]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 14,
            'cost' => 302.40,
            'location_id' => 2
        ],['hub_cost'=>174.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 15,
            'cost' => 27.50,
            'location_id' => 1
        ],['hub_cost'=>17.50]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 15,
            'cost' => 323.70,
            'location_id' => 2
        ],['hub_cost'=>186.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 16,
            'cost' => 28.90,
            'location_id' => 1
        ],['hub_cost'=>18.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 16,
            'cost' => 345.00,
            'location_id' => 2
        ],['hub_cost'=>198.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 17,
            'cost' => 30.50,
            'location_id' => 1
        ],['hub_cost'=>19.70]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 17,
            'cost' => 366.20,
            'location_id' => 2
        ],['hub_cost'=>210.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 18,
            'cost' => 32.00,
            'location_id' => 1
        ],['hub_cost'=>20.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 18,
            'cost' => 387.50,
            'location_id' => 2
        ],['hub_cost'=>223.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 19,
            'cost' => 33.40,
            'location_id' => 1
        ],['hub_cost'=>21.90]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 19,
            'cost' => 408.70,
            'location_id' => 2
        ],['hub_cost'=>235.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 20,
            'cost' => 35.00,
            'location_id' => 1
        ],['hub_cost'=>23.00]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 20,
            'cost' => 430.00,
            'location_id' => 2
        ],['hub_cost'=>247.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 21,
            'cost' => 36.40,
            'location_id' => 1
        ],['hub_cost'=>24.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 21,
            'cost' => 451.30,
            'location_id' => 2
        ],['hub_cost'=>259.90]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 22,
            'cost' => 38.00,
            'location_id' => 1
        ],['hub_cost'=>25.20]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 22,
            'cost' => 472.50,
            'location_id' => 2
        ],['hub_cost'=>272.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 23,
            'cost' => 39.40,
            'location_id' => 1
        ],['hub_cost'=>26.30]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 23,
            'cost' => 493.80,
            'location_id' => 2
        ],['hub_cost'=>284.40]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 24,
            'cost' => 40.90,
            'location_id' => 1
        ],['hub_cost'=>27.40]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 24,
            'cost' => 515.00,
            'location_id' => 2
        ],['hub_cost'=>296.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 25,
            'cost' => 42.40,
            'location_id' => 1
        ],['hub_cost'=>28.50]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 25,
            'cost' => 536.30,
            'location_id' => 2
        ],['hub_cost'=>308.90]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 26,
            'cost' => 43.90,
            'location_id' => 1
        ],['hub_cost'=>29.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 26,
            'cost' => 557.60,
            'location_id' => 2
        ],['hub_cost'=>321.10]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 27,
            'cost' => 45.50,
            'location_id' => 1
        ],['hub_cost'=>30.70]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 27,
            'cost' => 578.80,
            'location_id' => 2
        ],['hub_cost'=>333.40]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 28,
            'cost' => 46.90,
            'location_id' => 1
        ],['hub_cost'=>31.80]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 28,
            'cost' => 600.10,
            'location_id' => 2
        ],['hub_cost'=>345.60]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 29,
            'cost' => 48.40,
            'location_id' => 1
        ],['hub_cost'=>32.90]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 29,
            'cost' => 621.30,
            'location_id' => 2
        ],['hub_cost'=>357.90]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 30,
            'cost' => 50.00,
            'location_id' => 1
        ],['hub_cost'=>34.00]);

        Rate::updateOrCreate([
            'courier_id' => 3,
            'weight' => 30,
            'cost' => 642.60,
            'location_id' => 2
        ],['hub_cost'=>370.10]);

        /**
         * Rates for DHL
         */

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 1,
            'cost' => 7.30,
            'location_id' => 1
        ],['hub_cost'=>6.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 1,
            'cost' => 16.00,
            'location_id' => 2
        ],['hub_cost'=>14.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 2,
            'cost' => 15.20,
            'location_id' => 1
        ],['hub_cost'=>7.80]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 2,
            'cost' => 32.60,
            'location_id' => 2
        ],['hub_cost'=>30.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 3,
            'cost' => 23.90,
            'location_id' => 1
        ],['hub_cost'=>22.10]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 3,
            'cost' => 49.30,
            'location_id' => 2
        ],['hub_cost'=>45.40]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 4,
            'cost' => 29.20,
            'location_id' => 1
        ],['hub_cost'=>26.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 4,
            'cost' => 65.90,
            'location_id' => 2
        ],['hub_cost'=>60.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 5,
            'cost' => 34.50,
            'location_id' => 1
        ],['hub_cost'=>31.80]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 5,
            'cost' => 82.60,
            'location_id' => 2
        ],['hub_cost'=>76.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 6,
            'cost' => 39.80,
            'location_id' => 1
        ],['hub_cost'=>36.60]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 6,
            'cost' => 99.20,
            'location_id' => 2
        ],['hub_cost'=>91.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 7,
            'cost' => 45.10,
            'location_id' => 1
        ],['hub_cost'=>41.50]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 7,
            'cost' => 115.90,
            'location_id' => 2
        ],['hub_cost'=>106.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 8,
            'cost' => 50.40,
            'location_id' => 1
        ],['hub_cost'=>46.40]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 8,
            'cost' => 132.50,
            'location_id' => 2
        ],['hub_cost'=>121.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 9,
            'cost' => 55.70,
            'location_id' => 1
        ],['hub_cost'=>51.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 9,
            'cost' => 149.20,
            'location_id' => 2
        ],['hub_cost'=>137.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 10,
            'cost' => 61.00,
            'location_id' => 1
        ],['hub_cost'=>56.10]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 10,
            'cost' => 165.90,
            'location_id' => 2
        ],['hub_cost'=>152.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 11,
            'cost' => 66.30,
            'location_id' => 1
        ],['hub_cost'=>61.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 11,
            'cost' => 183.30,
            'location_id' => 2
        ],['hub_cost'=>168.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 12,
            'cost' => 71.60,
            'location_id' => 1
        ],['hub_cost'=>65.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 12,
            'cost' => 199.90,
            'location_id' => 2
        ],['hub_cost'=>184.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 13,
            'cost' => 76.90,
            'location_id' => 1
        ],['hub_cost'=>70.80]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 13,
            'cost' => 216.60,
            'location_id' => 2
        ],['hub_cost'=>199.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 14,
            'cost' => 82.20,
            'location_id' => 1
        ],['hub_cost'=>75.60]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 14,
            'cost' => 233.30,
            'location_id' => 2
        ],['hub_cost'=>214.60,'cost' => 233.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 15,
            'cost' => 87.50,
            'location_id' => 1
        ],['hub_cost'=>80.50]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 15,
            'cost' => 249.90,
            'location_id' => 2
        ],['hub_cost'=>230.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 16,
            'cost' => 92.80,
            'location_id' => 1
        ],['hub_cost'=>85.40]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 16,
            'cost' => 266.60,
            'location_id' => 2
        ],['hub_cost'=>245.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 17,
            'cost' => 98.10,
            'location_id' => 1
        ],['hub_cost'=>90.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 17,
            'cost' => 283.20,
            'location_id' => 2
        ],['hub_cost'=>260.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 18,
            'cost' => 103.40,
            'location_id' => 1
        ],['hub_cost'=>95.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 18,
            'cost' => 299.90,
            'location_id' => 2
        ],['hub_cost'=>276.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 19,
            'cost' => 108.70,
            'location_id' => 1
        ],['hub_cost'=>100.10]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 19,
            'cost' => 316.50,
            'location_id' => 2
        ],['hub_cost'=>291.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 20,
            'cost' => 114.00,
            'location_id' => 1
        ],['hub_cost'=>104.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 20,
            'cost' => 333.20,
            'location_id' => 2
        ],['hub_cost'=>306.60]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 21,
            'cost' => 119.30,
            'location_id' => 1
        ],['hub_cost'=>109.80]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 21,
            'cost' => 349.80,
            'location_id' => 2
        ],['hub_cost'=>321.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 22,
            'cost' => 124.60,
            'location_id' => 1
        ],['hub_cost'=>114.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 22,
            'cost' => 366.50,
            'location_id' => 2
        ],['hub_cost'=>337.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 23,
            'cost' => 129.90,
            'location_id' => 1
        ],['hub_cost'=>119.60]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 23,
            'cost' => 383.20,
            'location_id' => 2
        ],['hub_cost'=>304.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 24,
            'cost' => 135.20,
            'location_id' => 1
        ],['hub_cost'=>124.40]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 24,
            'cost' => 399.80,
            'location_id' => 2
        ],['hub_cost'=>367.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 25,
            'cost' => 140.50,
            'location_id' => 1
        ],['hub_cost'=>129.30]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 25,
            'cost' => 416.50,
            'location_id' => 2
        ],['hub_cost'=>383.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 26,
            'cost' => 145.80,
            'location_id' => 1
        ],['hub_cost'=>134.20]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 26,
            'cost' => 433.10,
            'location_id' => 2
        ],['hub_cost'=>398.50]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 27,
            'cost' => 151.10,
            'location_id' => 1
        ],['hub_cost'=>139.00]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 27,
            'cost' => 449.80,
            'location_id' => 2
        ],['hub_cost'=>413.90]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 28,
            'cost' => 156.40,
            'location_id' => 1
        ],['hub_cost'=>144.70]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 28,
            'cost' => 466.40,
            'location_id' => 2
        ],['hub_cost'=>429.10]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 29,
            'cost' => 161.70,
            'location_id' => 1
        ],['hub_cost'=>148.80]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 29,
            'cost' => 483.10,
            'location_id' => 2
        ],['hub_cost'=>444.50]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 30,
            'cost' => 167.00,
            'location_id' => 1
        ],['hub_cost'=>153.60]);

        Rate::updateOrCreate([
            'courier_id' => 4,
            'weight' => 30,
            'cost' => 499.80,
            'location_id' => 2
        ],['hub_cost'=>459.90]);

        /**
         * RATES FOR CJ LOGISTICS
         */

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 1,
            'cost' => 7.80,
            'location_id' => 1
        ],['hub_cost'=>6.30]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 1,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 2,
            'cost' => 9.20,
            'location_id' => 1
        ],['hub_cost'=>6.60]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 2,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 3,
            'cost' => 9.50,
            'location_id' => 1
        ],['hub_cost'=>6.60]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 3,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 4,
            'cost' => 10.70,
            'location_id' => 1
        ],['hub_cost'=>9.90]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 4,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 5,
            'cost' => 12.40,
            'location_id' => 1
        ],['hub_cost'=>11.40]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 5,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 6,
            'cost' => 14.00,
            'location_id' => 1
        ],['hub_cost'=>12.90]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 6,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 7,
            'cost' => 15.50,
            'location_id' => 1
        ],['hub_cost'=>14.30]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 7,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 8,
            'cost' => 17.00,
            'location_id' => 1
        ],['hub_cost'=>15.60]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 8,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 9,
            'cost' => 18.80,
            'location_id' => 1
        ],['hub_cost'=>17.40]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 9,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 10,
            'cost' => 20.60,
            'location_id' => 1
        ],['hub_cost'=>19.00]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 10,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 11,
            'cost' => 22.50,
            'location_id' => 1
        ],['hub_cost'=>20.70]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 11,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 12,
            'cost' => 24.30,
            'location_id' => 1
        ],['hub_cost'=>22.40]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 12,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 13,
            'cost' => 26.00,
            'location_id' => 1
        ],['hub_cost'=>24.00]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 13,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 14,
            'cost' => 27.80,
            'location_id' => 1
        ],['hub_cost'=>25.60]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 14,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 15,
            'cost' => 29.60,
            'location_id' => 1
        ],['hub_cost'=>27.40]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 15,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 16,
            'cost' => 31.50,
            'location_id' => 1
        ],['hub_cost'=>29.00]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 16,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 17,
            'cost' => 33.30,
            'location_id' => 1
        ],['hub_cost'=>30.70]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 17,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 18,
            'cost' => 35.10,
            'location_id' => 1
        ],['hub_cost'=>32.30]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 18,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 19,
            'cost' => 36.80,
            'location_id' => 1
        ],['hub_cost'=>33.90]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 19,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 20,
            'cost' => 38.60,
            'location_id' => 1
        ],['hub_cost'=>35.60]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 20,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 21,
            'cost' => 40.50,
            'location_id' => 1
        ],['hub_cost'=>37.30]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 21,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 22,
            'cost' => 42.30,
            'location_id' => 1
        ],['hub_cost'=>38.90]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 22,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 23,
            'cost' => 44.00,
            'location_id' => 1
        ],['hub_cost'=>40.50]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 23,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 24,
            'cost' => 45.80,
            'location_id' => 1
        ],['hub_cost'=>42.20]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 24,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 25,
            'cost' => 47.60,
            'location_id' => 1
        ],['hub_cost'=>43.80]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 25,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 26,
            'cost' => 95.80,
            'location_id' => 1
        ],['hub_cost'=>88.20]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 26,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 27,
            'cost' => 97.50,
            'location_id' => 1
        ],['hub_cost'=>89.70]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 27,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 28,
            'cost' => 99.30,
            'location_id' => 1
        ],['hub_cost'=>91.40]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 28,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 29,
            'cost' => 101.00,
            'location_id' => 1
        ],['hub_cost'=>92.90]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 29,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);


        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 30,
            'cost' => 102.70,
            'location_id' => 1
        ],['hub_cost'=>94.50]);

        Rate::updateOrCreate([
            'courier_id' => 5,
            'weight' => 30,
            'cost' => 0,
            'location_id' => 2
        ],['hub_cost'=>0]);
        

       /***
        * RATES FOR PGEON
        */
       
        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 1,
            'cost' => 5.50,
            'location_id' => 1
        ],['hub_cost'=>5.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 1,
            'cost' => 13.90,
            'location_id' => 2
        ],['hub_cost'=>13.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 2,
            'cost' => 5.50,
            'location_id' => 1
        ],['hub_cost'=>5.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 2,
            'cost' => 24.90,
            'location_id' => 2
        ],['hub_cost'=>24.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 3,
            'cost' => 5.50,
            'location_id' => 1
        ],['hub_cost'=>5.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 3,
            'cost' => 24.90,
            'location_id' => 2
        ],['hub_cost'=>24.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 4,
            'cost' => 5.50,
            'location_id' => 1
        ],['hub_cost'=>5.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 4,
            'cost' => 30.90,
            'location_id' => 2
        ],['hub_cost'=>30.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 5,
            'cost' => 5.50,
            'location_id' => 1
        ],['hub_cost'=>5.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 5,
            'cost' => 30.90,
            'location_id' => 2
        ],['hub_cost'=>30.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 6,
            'cost' => 9.40,
            'location_id' => 1
        ],['hub_cost'=>8.70]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 6,
            'cost' => 70.10,
            'location_id' => 2
        ],['hub_cost'=>70.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 7,
            'cost' => 10.80,
            'location_id' => 1
        ],['hub_cost'=>10.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 7,
            'cost' => 70.10,
            'location_id' => 2
        ],['hub_cost'=>70.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 8,
            'cost' => 12.30,
            'location_id' => 1
        ],['hub_cost'=>11.30]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 8,
            'cost' => 70.10,
            'location_id' => 2
        ],['hub_cost'=>70.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 9,
            'cost' => 13.60,
            'location_id' => 1
        ],['hub_cost'=>12.60]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 9,
            'cost' => 70.10,
            'location_id' => 2
        ],['hub_cost'=>70.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 10,
            'cost' => 15.10,
            'location_id' => 1
        ],['hub_cost'=>13.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 10,
            'cost' => 70.10,
            'location_id' => 2
        ],['hub_cost'=>70.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 11,
            'cost' => 16.50,
            'location_id' => 1
        ],['hub_cost'=>15.20]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 11,
            'cost' => 95.10,
            'location_id' => 2
        ],['hub_cost'=>95.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 12,
            'cost' => 18.00,
            'location_id' => 1
        ],['hub_cost'=>16.60]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 12,
            'cost' => 95.10,
            'location_id' => 2
        ],['hub_cost'=>95.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 13,
            'cost' => 19.40,
            'location_id' => 1
        ],['hub_cost'=>17.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 13,
            'cost' => 95.10,
            'location_id' => 2
        ],['hub_cost'=>95.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 14,
            'cost' => 20.80,
            'location_id' => 1
        ],['hub_cost'=>19.20]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 14,
            'cost' => 95.10,
            'location_id' => 2
        ],['hub_cost'=>95.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 15,
            'cost' => 22.30,
            'location_id' => 1
        ],['hub_cost'=>20.50]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 15,
            'cost' => 95.10,
            'location_id' => 2
        ],['hub_cost'=>95.10]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 16,
            'cost' => 23.60,
            'location_id' => 1
        ],['hub_cost'=>21.80]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 16,
            'cost' => 120.00,
            'location_id' => 2
        ],['hub_cost'=>120.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 17,
            'cost' => 25.00,
            'location_id' => 1
        ],['hub_cost'=>23.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 17,
            'cost' => 120.00,
            'location_id' => 2
        ],['hub_cost'=>120.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 18,
            'cost' => 26.50,
            'location_id' => 1
        ],['hub_cost'=>24.40]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 18,
            'cost' => 120.00,
            'location_id' => 2
        ],['hub_cost'=>120.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 19,
            'cost' => 27.80,
            'location_id' => 1
        ],['hub_cost'=>25.60]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 19,
            'cost' => 120.00,
            'location_id' => 2
        ],['hub_cost'=>120.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 20,
            'cost' => 29.30,
            'location_id' => 1
        ],['hub_cost'=>27.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 20,
            'cost' => 120.00,
            'location_id' => 2
        ],['hub_cost'=>120.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 21,
            'cost' => 30.60,
            'location_id' => 1
        ],['hub_cost'=>28.20]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 21,
            'cost' => 145.00,
            'location_id' => 2
        ],['hub_cost'=>145.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 22,
            'cost' => 32.00,
            'location_id' => 1
        ],['hub_cost'=>29.40]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 22,
            'cost' => 145.00,
            'location_id' => 2
        ],['hub_cost'=>145.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 23,
            'cost' => 33.50,
            'location_id' => 1
        ],['hub_cost'=>30.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 23,
            'cost' => 145.00,
            'location_id' => 2
        ],['hub_cost'=>145.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 24,
            'cost' => 34.90,
            'location_id' => 1
        ],['hub_cost'=>32.20]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 24,
            'cost' => 145.00,
            'location_id' => 2
        ],['hub_cost'=>145.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 25,
            'cost' => 36.30,
            'location_id' => 1
        ],['hub_cost'=>33.40]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 25,
            'cost' => 145.00,
            'location_id' => 2
        ],['hub_cost'=>145.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 26,
            'cost' => 37.60,
            'location_id' => 1
        ],['hub_cost'=>34.60]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 26,
            'cost' => 170.00,
            'location_id' => 2
        ],['hub_cost'=>170.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 27,
            'cost' => 39.10,
            'location_id' => 1
        ],['hub_cost'=>36.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 27,
            'cost' => 170.00,
            'location_id' => 2
        ],['hub_cost'=>170.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 28,
            'cost' => 40.40,
            'location_id' => 1
        ],['hub_cost'=>37.20]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 28,
            'cost' => 170.00,
            'location_id' => 2
        ],['hub_cost'=>170.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 29,
            'cost' => 41.80,
            'location_id' => 1
        ],['hub_cost'=>38.50]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 29,
            'cost' => 170.00,
            'location_id' => 2
        ],['hub_cost'=>170.00]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 30,
            'cost' => 43.30,
            'location_id' => 1
        ],['hub_cost'=>39.90]);

        Rate::updateOrCreate([
            'courier_id' => 6,
            'weight' => 30,
            'cost' => 170.00,
            'location_id' => 2
        ],['hub_cost'=>170.00]);

        /****
         * RATES FOR ARAMEX
         */
        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 1,
            'cost' => 7.20,
            'location_id' => 1
        ],['hub_cost'=>6.50]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 1,
            'cost' => 28.30,
            'location_id' => 2
        ],['hub_cost'=>26.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 2,
            'cost' => 9.90,
            'location_id' => 1
        ],['hub_cost'=>7.00]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 2,
            'cost' => 52.10,
            'location_id' => 2
        ],['hub_cost'=>47.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 3,
            'cost' => 9.90,
            'location_id' => 1
        ],['hub_cost'=>7.00]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 3,
            'cost' => 76.00,
            'location_id' => 2
        ],['hub_cost'=>69.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 4,
            'cost' => 11.80,
            'location_id' => 1
        ],['hub_cost'=>10.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 4,
            'cost' => 99.90,
            'location_id' => 2
        ],['hub_cost'=>92.00]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 5,
            'cost' => 13.80,
            'location_id' => 1
        ],['hub_cost'=>12.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 5,
            'cost' => 123.80,
            'location_id' => 2
        ],['hub_cost'=>114.00]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 6,
            'cost' => 15.70,
            'location_id' => 1
        ],['hub_cost'=>14.50]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 6,
            'cost' => 147.60,
            'location_id' => 2
        ],['hub_cost'=>135.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 7,
            'cost' => 17.70,
            'location_id' => 1
        ],['hub_cost'=>16.30]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 7,
            'cost' => 171.50,
            'location_id' => 2
        ],['hub_cost'=>157.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 8,
            'cost' => 19.70,
            'location_id' => 1
        ],['hub_cost'=>18.20]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 8,
            'cost' => 219.30,
            'location_id' => 2
        ],['hub_cost'=>201.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 9,
            'cost' => 21.60,
            'location_id' => 1
        ],['hub_cost'=>19.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 9,
            'cost' => 241.00,
            'location_id' => 2
        ],['hub_cost'=>221.70]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 10,
            'cost' => 23.60,
            'location_id' => 1
        ],['hub_cost'=>21.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 10,
            'cost' => 261.00,
            'location_id' => 2
        ],['hub_cost'=>240.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 11,
            'cost' => 25.50,
            'location_id' => 1
        ],['hub_cost'=>23.50]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 11,
            'cost' => 280.90,
            'location_id' => 2
        ],['hub_cost'=>258.50]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 12,
            'cost' => 27.50,
            'location_id' => 1
        ],['hub_cost'=>25.30]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 12,
            'cost' => 300.90,
            'location_id' => 2
        ],['hub_cost'=>276.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 13,
            'cost' => 29.50,
            'location_id' => 1
        ],['hub_cost'=>27.20]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 13,
            'cost' => 320.90,
            'location_id' => 2
        ],['hub_cost'=>295.30]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 14,
            'cost' => 31.40,
            'location_id' => 1
        ],['hub_cost'=>28.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 14,
            'cost' => 340.90,
            'location_id' => 2
        ],['hub_cost'=>313.70]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 15,
            'cost' => 33.40,
            'location_id' => 1
        ],['hub_cost'=>30.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 15,
            'cost' => 360.90,
            'location_id' => 2
        ],['hub_cost'=>332.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 16,
            'cost' => 37.10,
            'location_id' => 1
        ],['hub_cost'=>32.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 16,
            'cost' => 380.80,
            'location_id' => 2
        ],['hub_cost'=>350.40]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 17,
            'cost' => 37.20,
            'location_id' => 1
        ],['hub_cost'=>34.20]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 17,
            'cost' => 400.80,
            'location_id' => 2
        ],['hub_cost'=>368.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 18,
            'cost' => 39.20,
            'location_id' => 1
        ],['hub_cost'=>36.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 18,
            'cost' => 420.80,
            'location_id' => 2
        ],['hub_cost'=>387.20]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 19,
            'cost' => 41.10,
            'location_id' => 1
        ],['hub_cost'=>37.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 19,
            'cost' => 440.80,
            'location_id' => 2
        ],['hub_cost'=>405.60]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 20,
            'cost' => 43.10,
            'location_id' => 1
        ],['hub_cost'=>39.70]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 20,
            'cost' => 460.80,
            'location_id' => 2
        ],['hub_cost'=>424.00]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 21,
            'cost' => 45.00,
            'location_id' => 1
        ],['hub_cost'=>41.40]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 21,
            'cost' => 480.70,
            'location_id' => 2
        ],['hub_cost'=>442.30]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 22,
            'cost' => 47.00,
            'location_id' => 1
        ],['hub_cost'=>43.30]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 22,
            'cost' => 500.70,
            'location_id' => 2
        ],['hub_cost'=>460.70]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 23,
            'cost' => 49.00,
            'location_id' => 1
        ],['hub_cost'=>45.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 23,
            'cost' => 520.70,
            'location_id' => 2
        ],['hub_cost'=>479.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 24,
            'cost' => 50.90,
            'location_id' => 1
        ],['hub_cost'=>46.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 24,
            'cost' => 540.70,
            'location_id' => 2
        ],['hub_cost'=>497.50]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 25,
            'cost' => 52.90,
            'location_id' => 1
        ],['hub_cost'=>48.70]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 25,
            'cost' => 560.70,
            'location_id' => 2
        ],['hub_cost'=>515.90]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 26,
            'cost' => 54.80,
            'location_id' => 1
        ],['hub_cost'=>50.50]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 26,
            'cost' => 580.60,
            'location_id' => 2
        ],['hub_cost'=>534.20]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 27,
            'cost' => 56.80,
            'location_id' => 1
        ],['hub_cost'=>52.30]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 27,
            'cost' => 600.60,
            'location_id' => 2
        ],['hub_cost'=>552.60]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 28,
            'cost' => 58.70,
            'location_id' => 1
        ],['hub_cost'=>54.10]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 28,
            'cost' => 620.60,
            'location_id' => 2
        ],['hub_cost'=>571.00]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 29,
            'cost' => 60.60,
            'location_id' => 1
        ],['hub_cost'=>55.80]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 29,
            'cost' => 640.60,
            'location_id' => 2
        ],['hub_cost'=>589.40]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 30,
            'cost' => 62.60,
            'location_id' => 1
        ],['hub_cost'=>57.60]);

        Rate::updateOrCreate([
            'courier_id' => 7,
            'weight' => 30,
            'cost' => 660.60,
            'location_id' => 2
        ],['hub_cost'=>607.80]);


        /**
         * RATE FOR ABX EXPRESS
         */

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 1,
            'cost' => 7.30,
            'location_id' => 1
        ],['hub_cost'=>6.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 1,
            'cost' => 16.50,
            'location_id' => 2
        ],['hub_cost'=>14.50]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 2,
            'cost' => 9.40,
            'location_id' => 1
        ],['hub_cost'=>6.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 2,
            'cost' => 34.30,
            'location_id' => 2
        ],['hub_cost'=>29.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 3,
            'cost' => 9.50,
            'location_id' => 1
        ],['hub_cost'=>6.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 3,
            'cost' => 51.40,
            'location_id' => 2
        ],['hub_cost'=>43.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 4,
            'cost' => 11.30,
            'location_id' => 1
        ],['hub_cost'=>7.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 4,
            'cost' => 68.60,
            'location_id' => 2
        ],['hub_cost'=>58.50]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 5,
            'cost' => 13.20,
            'location_id' => 1
        ],['hub_cost'=>9.00]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 5,
            'cost' => 85.70,
            'location_id' => 2
        ],['hub_cost'=>73.10]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 6,
            'cost' => 15.00,
            'location_id' => 1
        ],['hub_cost'=>10.20]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 6,
            'cost' => 102.90,
            'location_id' => 2
        ],['hub_cost'=>87.80]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 7,
            'cost' => 16.90,
            'location_id' => 1
        ],['hub_cost'=>11.40]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 7,
            'cost' => 120.00,
            'location_id' => 2
        ],['hub_cost'=>102.40]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 8,
            'cost' => 18.70,
            'location_id' => 1
        ],['hub_cost'=>12.50]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 8,
            'cost' => 137.10,
            'location_id' => 2
        ],['hub_cost'=>117.00]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 9,
            'cost' => 20.50,
            'location_id' => 1
        ],['hub_cost'=>13.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 9,
            'cost' => 154.30,
            'location_id' => 2
        ],['hub_cost'=>131.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 10,
            'cost' => 28.40,
            'location_id' => 1
        ],['hub_cost'=>16.10]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 10,
            'cost' => 171.40,
            'location_id' => 2
        ],['hub_cost'=>146.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 11,
            'cost' => 24.30,
            'location_id' => 1
        ],['hub_cost'=>16.10]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 11,
            'cost' => 188.60,
            'location_id' => 2
        ],['hub_cost'=>160.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 12,
            'cost' => 26.20,
            'location_id' => 1
        ],['hub_cost'=>17.20]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 12,
            'cost' => 205.70,
            'location_id' => 2
        ],['hub_cost'=>175.50]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 13,
            'cost' => 28.00,
            'location_id' => 1
        ],['hub_cost'=>18.40]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 13,
            'cost' => 222.90,
            'location_id' => 2
        ],['hub_cost'=>190.20]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 14,
            'cost' => 29.90,
            'location_id' => 1
        ],['hub_cost'=>19.60]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 14,
            'cost' => 240.00,
            'location_id' => 2
        ],['hub_cost'=>204.80]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 15,
            'cost' => 31.80,
            'location_id' => 1
        ],['hub_cost'=>20.80]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 15,
            'cost' => 257.10,
            'location_id' => 2
        ],['hub_cost'=>219.40]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 16,
            'cost' => 33.60,
            'location_id' => 1
        ],['hub_cost'=>21.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 16,
            'cost' => 274.30,
            'location_id' => 2
        ],['hub_cost'=>234.10]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 17,
            'cost' => 33.50,
            'location_id' => 1
        ],['hub_cost'=>22.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 17,
            'cost' => 291.40,
            'location_id' => 2
        ],['hub_cost'=>248.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 18,
            'cost' => 37.40,
            'location_id' => 1
        ],['hub_cost'=>24.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 18,
            'cost' => 308.80,
            'location_id' => 2
        ],['hub_cost'=>263.40]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 19,
            'cost' => 39.20,
            'location_id' => 1
        ],['hub_cost'=>25.40]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 19,
            'cost' => 325.70,
            'location_id' => 2
        ],['hub_cost'=>277.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 20,
            'cost' => 41.00,
            'location_id' => 1
        ],['hub_cost'=>26.60]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 20,
            'cost' => 342.90,
            'location_id' => 2
        ],['hub_cost'=>292.60]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 21,
            'cost' => 42.80,
            'location_id' => 1
        ],['hub_cost'=>27.80]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 21,
            'cost' => 388.60,
            'location_id' => 2
        ],['hub_cost'=>312.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 22,
            'cost' => 44.70,
            'location_id' => 1
        ],['hub_cost'=>28.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 22,
            'cost' => 434.30,
            'location_id' => 2
        ],['hub_cost'=>333.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 23,
            'cost' => 46.60,
            'location_id' => 1
        ],['hub_cost'=>30.10]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 23,
            'cost' => 480.00,
            'location_id' => 2
        ],['hub_cost'=>353.60]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 24,
            'cost' => 48.50,
            'location_id' => 1
        ],['hub_cost'=>31.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 24,
            'cost' => 525.70,
            'location_id' => 2
        ],['hub_cost'=>373.90]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 25,
            'cost' => 50.30,
            'location_id' => 1
        ],['hub_cost'=>32.50]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 25,
            'cost' => 571.40,
            'location_id' => 2
        ],['hub_cost'=>394.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 26,
            'cost' => 52.10,
            'location_id' => 1
        ],['hub_cost'=>33.60]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 26,
            'cost' => 617.10,
            'location_id' => 2
        ],['hub_cost'=>414.60]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 27,
            'cost' => 54.10,
            'location_id' => 1
        ],['hub_cost'=>34.80]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 27,
            'cost' => 662.90,
            'location_id' => 2
        ],['hub_cost'=>435.00]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 28,
            'cost' => 55.90,
            'location_id' => 1
        ],['hub_cost'=>36.00]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 28,
            'cost' => 708.60,
            'location_id' => 2
        ],['hub_cost'=>455.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 29,
            'cost' => 57.70,
            'location_id' => 1
        ],['hub_cost'=>37.10]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 29,
            'cost' => 754.30,
            'location_id' => 2
        ],['hub_cost'=>475.70]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 30,
            'cost' => 59.60,
            'location_id' => 1
        ],['hub_cost'=>38.30]);

        Rate::updateOrCreate([
            'courier_id' => 8,
            'weight' => 30,
            'cost' => 800.00,
            'location_id' => 2
        ],['hub_cost'=>496.00]);

        /**
         * RATE FOR NATIONWIDE EXPRESS
         */

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 1,
            'cost' => 7.30,
            'location_id' => 1
        ],['hub_cost'=>7.10]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 1,
            'cost' => 20.00,
            'location_id' => 2
        ],['hub_cost'=>14.40]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 2,
            'cost' => 9.40,
            'location_id' => 1
        ],['hub_cost'=>7.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 2,
            'cost' => 34.00,
            'location_id' => 2
        ],['hub_cost'=>26.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 3,
            'cost' => 9.50,
            'location_id' => 1
        ],['hub_cost'=>7.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 3,
            'cost' => 48.00,
            'location_id' => 2
        ],['hub_cost'=>39.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 4,
            'cost' => 11.30,
            'location_id' => 1
        ],['hub_cost'=>8.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 4,
            'cost' => 62.00,
            'location_id' => 2
        ],['hub_cost'=>51.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 5,
            'cost' => 13.20,
            'location_id' => 1
        ],['hub_cost'=>10.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 5,
            'cost' => 76.00,
            'location_id' => 2
        ],['hub_cost'=>64.00]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 6,
            'cost' => 15.00,
            'location_id' => 1
        ],['hub_cost'=>11.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 6,
            'cost' => 90.00,
            'location_id' => 2
        ],['hub_cost'=>76.40]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 7,
            'cost' => 16.90,
            'location_id' => 1
        ],['hub_cost'=>12.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 7,
            'cost' => 104.00,
            'location_id' => 2
        ],['hub_cost'=>88.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 8,
            'cost' => 18.70,
            'location_id' => 1
        ],['hub_cost'=>14.10]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 8,
            'cost' => 118.00,
            'location_id' => 2
        ],['hub_cost'=>101.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 9,
            'cost' => 20.50,
            'location_id' => 1
        ],['hub_cost'=>14.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 9,
            'cost' => 132.00,
            'location_id' => 2
        ],['hub_cost'=>113.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 10,
            'cost' => 28.40,
            'location_id' => 1
        ],['hub_cost'=>16.10]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 10,
            'cost' => 146.00,
            'location_id' => 2
        ],['hub_cost'=>126.00]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 11,
            'cost' => 24.30,
            'location_id' => 1
        ],['hub_cost'=>16.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 11,
            'cost' => 160.00,
            'location_id' => 2
        ],['hub_cost'=>138.40]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 12,
            'cost' => 26.20,
            'location_id' => 1
        ],['hub_cost'=>17.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 12,
            'cost' => 174.00,
            'location_id' => 2
        ],['hub_cost'=>150.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 13,
            'cost' => 28.00,
            'location_id' => 1
        ],['hub_cost'=>18.90]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 13,
            'cost' => 188.00,
            'location_id' => 2
        ],['hub_cost'=>163.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 14,
            'cost' => 29.90,
            'location_id' => 1
        ],['hub_cost'=>20.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 14,
            'cost' => 202.00,
            'location_id' => 2
        ],['hub_cost'=>175.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 15,
            'cost' => 31.80,
            'location_id' => 1
        ],['hub_cost'=>21.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 15,
            'cost' => 216.00,
            'location_id' => 2
        ],['hub_cost'=>188.00]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 16,
            'cost' => 33.60,
            'location_id' => 1
        ],['hub_cost'=>22.90]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 16,
            'cost' => 230.00,
            'location_id' => 2
        ],['hub_cost'=>200.40]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 17,
            'cost' => 33.50,
            'location_id' => 1
        ],['hub_cost'=>23.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 17,
            'cost' => 244.00,
            'location_id' => 2
        ],['hub_cost'=>212.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 18,
            'cost' => 37.40,
            'location_id' => 1
        ],['hub_cost'=>25.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 18,
            'cost' => 258.00,
            'location_id' => 2
        ],['hub_cost'=>225.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 19,
            'cost' => 39.20,
            'location_id' => 1
        ],['hub_cost'=>26.90]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 19,
            'cost' => 272.00,
            'location_id' => 2
        ],['hub_cost'=>237.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 20,
            'cost' => 41.00,
            'location_id' => 1
        ],['hub_cost'=>28.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 20,
            'cost' => 286.00,
            'location_id' => 2
        ],['hub_cost'=>250.00]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 21,
            'cost' => 42.80,
            'location_id' => 1
        ],['hub_cost'=>29.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 21,
            'cost' => 300.00,
            'location_id' => 2
        ],['hub_cost'=>262.40]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 22,
            'cost' => 44.70,
            'location_id' => 1
        ],['hub_cost'=>30.90]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 22,
            'cost' => 314.00,
            'location_id' => 2
        ],['hub_cost'=>274.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 23,
            'cost' => 46.60,
            'location_id' => 1
        ],['hub_cost'=>32.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 23,
            'cost' => 328.00,
            'location_id' => 2
        ],['hub_cost'=>287.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 24,
            'cost' => 48.50,
            'location_id' => 1
        ],['hub_cost'=>33.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 24,
            'cost' => 342.00,
            'location_id' => 2
        ],['hub_cost'=>299.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 25,
            'cost' => 50.30,
            'location_id' => 1
        ],['hub_cost'=>34.90]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 25,
            'cost' => 356.00,
            'location_id' => 2
        ],['hub_cost'=>312.00]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 26,
            'cost' => 52.10,
            'location_id' => 1
        ],['hub_cost'=>36.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 26,
            'cost' => 370.00,
            'location_id' => 2
        ],['hub_cost'=>324.40]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 27,
            'cost' => 54.10,
            'location_id' => 1
        ],['hub_cost'=>37.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 27,
            'cost' => 384.00,
            'location_id' => 2
        ],['hub_cost'=>336.80]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 28,
            'cost' => 55.90,
            'location_id' => 1
        ],['hub_cost'=>38.90]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 28,
            'cost' => 398.00,
            'location_id' => 2
        ],['hub_cost'=>349.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 29,
            'cost' => 57.70,
            'location_id' => 1
        ],['hub_cost'=>40.20]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 29,
            'cost' => 412.00,
            'location_id' => 2
        ],['hub_cost'=>361.60]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 30,
            'cost' => 59.60,
            'location_id' => 1
        ],['hub_cost'=>41.50]);

        Rate::updateOrCreate([
            'courier_id' => 9,
            'weight' => 30,
            'cost' => 426.00,
            'location_id' => 2
        ],['hub_cost'=>374.00]);


        /**
         * RATE FOR NINJA VAN
         */
       
        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 1,
            'cost' => 7.00,
            'location_id' => 1
        ],['hub_cost'=>5.80]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 1,
            'cost' => 15.90,
            'location_id' => 2
        ],['hub_cost'=>14.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 2,
            'cost' => 7.00,
            'location_id' => 1
        ],['hub_cost'=>6.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 2,
            'cost' => 31.80,
            'location_id' => 2
        ],['hub_cost'=>24.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 3,
            'cost' => 9.50,
            'location_id' => 1
        ],['hub_cost'=>7.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 3,
            'cost' => 42.40,
            'location_id' => 2
        ],['hub_cost'=>36.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 4,
            'cost' => 10.60,
            'location_id' => 1
        ],['hub_cost'=>8.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 4,
            'cost' => 53.00,
            'location_id' => 2
        ],['hub_cost'=>44.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 5,
            'cost' => 11.70,
            'location_id' => 1
        ],['hub_cost'=>9.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 5,
            'cost' => 63.60,
            'location_id' => 2
        ],['hub_cost'=>54.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 6,
            'cost' => 12.70,
            'location_id' => 1
        ],['hub_cost'=>10.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 6,
            'cost' => 74.20,
            'location_id' => 2
        ],['hub_cost'=>64.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 7,
            'cost' => 13.80,
            'location_id' => 1
        ],['hub_cost'=>11.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 7,
            'cost' => 84.80,
            'location_id' => 2
        ],['hub_cost'=>72.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 8,
            'cost' => 14.80,
            'location_id' => 1
        ],['hub_cost'=>12.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 8,
            'cost' => 95.40,
            'location_id' => 2
        ],['hub_cost'=>80.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 9,
            'cost' => 15.90,
            'location_id' => 1
        ],['hub_cost'=>13.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 9,
            'cost' => 106.00,
            'location_id' => 2
        ],['hub_cost'=>88.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 10,
            'cost' => 17.00,
            'location_id' => 1
        ],['hub_cost'=>14.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 10,
            'cost' => 116.60,
            'location_id' => 2
        ],['hub_cost'=>96.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 11,
            'cost' => 18.00,
            'location_id' => 1
        ],['hub_cost'=>15.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 11,
            'cost' => 127.20,
            'location_id' => 2
        ],['hub_cost'=>106.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 12,
            'cost' => 19.10,
            'location_id' => 1
        ],['hub_cost'=>16.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 12,
            'cost' => 137.80,
            'location_id' => 2
        ],['hub_cost'=>115.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 13,
            'cost' => 20.10,
            'location_id' => 1
        ],['hub_cost'=>17.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 13,
            'cost' => 148.40,
            'location_id' => 2
        ],['hub_cost'=>120.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 14,
            'cost' => 21.20,
            'location_id' => 1
        ],['hub_cost'=>19.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 14,
            'cost' => 159.00,
            'location_id' => 2
        ],['hub_cost'=>128.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 15,
            'cost' => 24.40,
            'location_id' => 1
        ],['hub_cost'=>20.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 15,
            'cost' => 169.60,
            'location_id' => 2
        ],['hub_cost'=>136.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 16,
            'cost' => 25.40,
            'location_id' => 1
        ],['hub_cost'=>21.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 16,
            'cost' => 180.20,
            'location_id' => 2
        ],['hub_cost'=>144.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 17,
            'cost' => 26.50,
            'location_id' => 1
        ],['hub_cost'=>21.70]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 17,
            'cost' => 190.80,
            'location_id' => 2
        ],['hub_cost'=>154.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 18,
            'cost' => 27.60,
            'location_id' => 1
        ],['hub_cost'=>22.80]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 18,
            'cost' => 201.40,
            'location_id' => 2
        ],['hub_cost'=>164.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 19,
            'cost' => 28.60,
            'location_id' => 1
        ],['hub_cost'=>23.90]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 19,
            'cost' => 212.00,
            'location_id' => 2
        ],['hub_cost'=>172.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 20,
            'cost' => 29.70,
            'location_id' => 1
        ],['hub_cost'=>24.90]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 20,
            'cost' => 222.60,
            'location_id' => 2
        ],['hub_cost'=>186.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 21,
            'cost' => 30.70,
            'location_id' => 1
        ],['hub_cost'=>26.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 21,
            'cost' => 233.20,
            'location_id' => 2
        ],['hub_cost'=>194.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 22,
            'cost' => 31.80,
            'location_id' => 1
        ],['hub_cost'=>27.00]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 22,
            'cost' => 243.80,
            'location_id' => 2
        ],['hub_cost'=>202.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 23,
            'cost' => 32.90,
            'location_id' => 1
        ],['hub_cost'=>28.10]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 23,
            'cost' => 254.40,
            'location_id' => 2
        ],['hub_cost'=>211.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 24,
            'cost' => 33.90,
            'location_id' => 1
        ],['hub_cost'=>29.20]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 24,
            'cost' => 265.00,
            'location_id' => 2
        ],['hub_cost'=>221.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 25,
            'cost' => 35.00,
            'location_id' => 1
        ],['hub_cost'=>30.20]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 25,
            'cost' => 275.60,
            'location_id' => 2
        ],['hub_cost'=>231.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 26,
            'cost' => 36.00,
            'location_id' => 1
        ],['hub_cost'=>31.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 26,
            'cost' => 286.20,
            'location_id' => 2
        ],['hub_cost'=>241.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 27,
            'cost' => 37.10,
            'location_id' => 1
        ],['hub_cost'=>32.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 27,
            'cost' => 296.80,
            'location_id' => 2
        ],['hub_cost'=>251.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 28,
            'cost' => 38.20,
            'location_id' => 1
        ],['hub_cost'=>34.50]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 28,
            'cost' => 307.40,
            'location_id' => 2
        ],['hub_cost'=>261.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 29,
            'cost' => 39.20,
            'location_id' => 1
        ],['hub_cost'=>34.50]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 29,
            'cost' => 318.00,
            'location_id' => 2
        ],['hub_cost'=>271.30]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 30,
            'cost' => 40.30,
            'location_id' => 1
        ],['hub_cost'=>34.50]);

        Rate::updateOrCreate([
            'courier_id' => 10,
            'weight' => 30,
            'cost' => 328.60,
            'location_id' => 2
        ],['hub_cost'=>281.30]);

    }
}

<?php

use App\CourierImage;
use Illuminate\Database\Seeder;

class CouriersImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourierImage::create([
            'courier_id' => 1,
            'path' => '/images/couriers/',
            'filename' => 'poslaju.png'
        ]);

        CourierImage::create([
            'courier_id' => 2,
            'path' => '/images/couriers/',
            'filename' => 'j&t.png'
        ]);

        CourierImage::create([
            'courier_id' => 3,
            'path' => '/images/couriers/',
            'filename' => 'skynet.png'
        ]);

        CourierImage::create([
            'courier_id' => 4,
            'path' => '/images/couriers/',
            'filename' => 'dhl.png'
        ]);

        CourierImage::create([
            'courier_id' => 5,
            'path' => '/images/couriers/',
            'filename' => 'cj-logistics.png'
        ]);

        CourierImage::create([
            'courier_id' => 6,
            'path' => '/images/couriers/',
            'filename' => 'pgeon.png'
        ]);

        CourierImage::create([
            'courier_id' => 7,
            'path' => '/images/couriers/',
            'filename' => 'aramex.png'
        ]);

        CourierImage::create([
            'courier_id' => 8,
            'path' => '/images/couriers/',
            'filename' => 'abx-express.png'
        ]);

        CourierImage::create([
            'courier_id' => 9,
            'path' => '/images/couriers/',
            'filename' => 'nationwide.png'
        ]);

        CourierImage::create([
            'courier_id' => 10,
            'path' => '/images/couriers/',
            'filename' => 'ninja-van.png'
        ]);

     
    }
}

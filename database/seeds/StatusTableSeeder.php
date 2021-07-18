<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'id' => 1000,
            'name' => 'Waiting Pickup',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1001,
            'name' => 'Order Placed',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1002,
            'name' => 'Order Shipped',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1003,
            'name' => 'Order Delivered',
            'description' => 'Status for order status.'
        ]);

    }
}

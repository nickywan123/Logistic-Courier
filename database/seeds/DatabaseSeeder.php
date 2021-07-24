<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\PostcodesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);

         /** IMPORTANT -MUST SEED */
         //$this->call(StatesTableSeeder::class);
         //$this->call(WeightTableSeeder::class);
         //$this->call(PostcodesTableSeeder::class);

         //$this->call(RatesTableSeeder::class);
        // $this->call(LocationsTableSeeder::class);
        // $this->call(CouriersTableSeeder::class);
         //$this->call(CouriersImagesTableSeeder::class);
         //$this->call(StatusTableSeeder::class);
         //$this->call(PermissionsTableSeeder::class);

    }
}

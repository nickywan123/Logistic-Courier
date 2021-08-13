<?php

use App\Web\FaqCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        FaqCategory::truncate();
        Schema::enableForeignKeyConstraints();

        FaqCategory::updateOrCreate([
            'name' => 'User'
        ]);
        FaqCategory::updateOrCreate([
            'name' => 'Merchant'
        ]);
        FaqCategory::updateOrCreate([
            'name' => 'Rider'
        ]);
        FaqCategory::updateOrCreate([
            'name' => 'Hub'
        ]);
    }
}

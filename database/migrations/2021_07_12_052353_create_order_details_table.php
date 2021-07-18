<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('hub');
            $table->string('pickup_date');
            $table->string('pickup_time');
            $table->string('weight');
            $table->string('delivery_note')->nullable();
            $table->string('recipient_address');
            $table->string('city');
            $table->string('state');
            $table->integer('postcode');
            $table->string('delivery_date');
            $table->string('delivery_time');
            $table->string('recipient_name');
            $table->string('contact_number');
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}

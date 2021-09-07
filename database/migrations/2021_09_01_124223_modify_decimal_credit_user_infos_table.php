<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDecimalCreditUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            $table->decimal('credit', 7, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            $table->decimal('credit', 5, 2)->change();
        });
    }
}

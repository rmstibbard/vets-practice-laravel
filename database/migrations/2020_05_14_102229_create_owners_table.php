<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 255)->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('address_1', 255)->nullable();
            $table->string('address_2', 255)->nullable();
            $table->string('town', 255)->nullable();
            $table->string('postcode', 12)->nullable();
            $table->string('landline', 15)->nullable();
            $table->string('mobile', 15)->nullable();
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
        Schema::dropIfExists('owners');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('animal_name', 255);
            $table->string('animal_type', 255);
            $table->dateTime('dob');
            $table->float('weight', 10, 2);
            $table->float('height', 10, 2);
            $table->enum('biteyness', [1, 2, 3, 4, 5]);
            $table->timestamps();
            $table->foreignId("owner_id")->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
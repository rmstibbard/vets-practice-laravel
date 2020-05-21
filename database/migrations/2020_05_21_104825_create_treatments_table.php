<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string("name", 30);
        });

        // create the pivot table using the Eloquent naming convention
        Schema::create("animal_treatment", function (Blueprint $table) {
             $table->id();

            // create the animal id column and foreign key
            $table->foreignId("animal_id")->unsigned();
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");

            // create the treatment id column and foreign key
            $table->foreignId("treatment_id")->unsigned();
            $table->foreign("treatment_id")->references("id")->on("treatments")->onDelete("cascade");
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // otherwise all the tags foreign key contraints would fail
        Schema::dropIfExists("animal_treatment");

        // then drop the tags table
        Schema::dropIfExists("treatments");
    }
}
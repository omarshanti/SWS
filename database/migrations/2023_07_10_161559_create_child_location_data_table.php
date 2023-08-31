<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildLocationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_location_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('child_id');
            $table->double('longitude');
            $table->double('latitude');
            $table->timestamps();
            // Foreign key constraint
            $table->foreign('child_id')->references('id')->on('child_identification')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_location_data');
    }
}

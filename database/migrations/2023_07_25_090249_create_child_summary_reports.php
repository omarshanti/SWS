<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildSummaryReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_summary_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('child_id');
            $table->text('family_situation');
            $table->foreign('child_id')->references('id')->on('child_identification');
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
        Schema::dropIfExists('child_summary_reports');
    }
}

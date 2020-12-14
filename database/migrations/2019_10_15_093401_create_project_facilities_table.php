<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->text('special_facilities_text')->nullable();
            $table->text('special_facilities')->nullable();
            $table->text('infrastructural_facilities_text')->nullable();
            $table->text('infrastructural_facilities')->nullable();
            $table->text('plot_accomodation_text')->nullable();
            $table->text('plot_accomodations')->nullable();
            $table->string('plot_accomodations_measure_by')->nullable();
            $table->text('roads_text')->nullable();
            $table->text('roads')->nullable();
            $table->string('roads_measure_by')->nullable();
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
        Schema::dropIfExists('project_facilities');
    }
}

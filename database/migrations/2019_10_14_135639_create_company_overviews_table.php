<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyOverviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_overviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('experience');
            $table->string('portfolio');
            $table->string('resident');
            $table->string('project');
            $table->string('about_slider_1')->nullable();
            $table->string('about_slider_2')->nullable();
            $table->string('about_slider_3')->nullable();
            $table->string('vision')->nullable();
            $table->string('mission')->nullable();
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
        Schema::dropIfExists('company_overviews');
    }
}

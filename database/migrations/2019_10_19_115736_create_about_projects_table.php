<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('project_page_about_project_title');
            $table->text('project_page_about_project_description');
            $table->string('project_page_about_project_image');
            $table->tinyInteger('project_page_about_project_image_position');
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
        Schema::dropIfExists('about_projects');
    }
}

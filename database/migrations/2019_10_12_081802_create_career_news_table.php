<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerNewssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('picture');
            $table->text('message');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('publication_status')->default(1);
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
        Schema::dropIfExists('career_news');
    }
}

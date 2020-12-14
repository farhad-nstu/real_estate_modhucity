<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_commnets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->string('name');
            $table->text('comment');
            $table->string('picture')->default('images/blog-images/comment/user.png');
            $table->tinyInteger('publication_status')->default(0);
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
        Schema::dropIfExists('blog_commnets');
    }
}

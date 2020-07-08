<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('content')->nullable();
            $table->string('picture')->nullable();
            $table->unsignedInteger('category_id');
            $table->string('status')->nullable();
            $table->boolean('show_on_homepage')->default(0);
            $table->integer('read_time')->nullable();
            $table->string('slug');
            $table->text('excerpt')->nullable()->default(null);
            $table->date('publish_date')->nullable();
            $table->unsignedInteger('author_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('headline')->nullable();
            $table->text('paragraph')->nullable();
            $table->string('firstSubhead')->nullable();
            $table->text('secondParagraph')->nullable();
            $table->string('secondHeadline')->nullable();
            $table->text('thirdParagraph')->nullable();
            $table->text('paragraph4')->nullable();
            $table->text('paragraph5')->nullable();
            $table->string('categories')->nullable();
            $table->string('tags')->nullable();
            $table->string('locale');
            $table->unique(['post_id','locale']);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

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
        Schema::dropIfExists('post_translations');
    }
}

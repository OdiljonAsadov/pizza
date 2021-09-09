<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_blog_page', function (Blueprint $table) {
            $table->id();
            $table->integer('blogCategory_id');
            $table->string('name');
            $table->string('image');
            $table->date('date');
            $table->string('description');
            $table->text('summernote')->nullable();
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
        Schema::dropIfExists('_blog_page');
    }
}

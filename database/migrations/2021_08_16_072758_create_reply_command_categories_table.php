<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyCommandCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_command_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('blog_id');
            $table->integer('comment_id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('subject')->nullable();
            $table->longText('message');
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
        Schema::dropIfExists('reply_command_categories');
    }
}

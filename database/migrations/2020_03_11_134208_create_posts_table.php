<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('IDX')->unique();
            $table->unsignedBigInteger('USER_IDX');
            $table->string('POST_TITLE', 100)->nullable(false);
            $table->string('POST_DESCRIPTION', 200)->nullable(true);
            $table->text('POST_CONTENT', 10)->nullable(false);
            $table->char('USE_YN', 1)->default('Y');
            $table->ipAddress('SYS_REG_IP', 16);
            $table->datetime('SYS_REG_TS')->useCurrent();
            
            $table->foreign('USER_IDX')->references('IDX')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

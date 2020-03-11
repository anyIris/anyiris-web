<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('IDX')->unique();
            $table->char('USER_EMAIL', 30)->nullable(false);
            $table->char('USER_NICKNAME', 10)->nullable(false);
            $table->char('USER_PASSWORD', 255)->nullable(false);
            $table->char('USE_YN', 1)->default('Y');
            $table->ipAddress('SYS_REG_IP', 16);
            $table->datetime('SYS_REG_TS')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

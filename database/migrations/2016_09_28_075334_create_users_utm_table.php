<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersUtmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_utm', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('source')->nullable();
            $table->string('medium')->nullable();
            $table->string('term')->nullable();
            $table->string('campaign')->nullable();
            $table->engine = 'InnoDB';
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('chipilin')->nullable();
            $table->integer('elote')->nullable();
            $table->integer('hierbasanta')->nullable();
            $table->integer('bola')->nullable();
            $table->integer('mole')->nullable();
            $table->integer('cambray')->nullable();
            $table->integer('total')->nullable();
            $table->string('celular')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

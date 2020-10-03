<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docreg', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('DOB');
            $table->string('gender');
            $table->string('qualification');
            $table->string('spec');
            $table->string('exp');
            $table->string('image')->nullable();
            $table->string('clicname');
            $table->string('address');
            $table->string('location');
            $table->string('user');
            $table->string('password');
            $table->string('repassword');
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
        Schema::dropIfExists('docreg');
    }
}

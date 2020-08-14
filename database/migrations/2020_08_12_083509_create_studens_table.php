<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathers name');
            $table->string('mothers name');
            $table->string('gender');
            $table->string('dob');
            $table->string('usn');
            $table->string('section');
            $table->text('address');
            $table->string('city');
            $table->string('district');
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
        Schema::dropIfExists('studens');
    }
}

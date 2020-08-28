<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('roll_no');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('DOB');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('district');
            $table->string('birth_place');
            $table->string('blood_group');
            $table->string('subject');
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
        Schema::dropIfExists('stud');
    }
}

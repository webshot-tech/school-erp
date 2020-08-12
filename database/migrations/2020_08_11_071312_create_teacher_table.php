<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('qualification');
            $table->string('parent_name');
            $table->string('experience');
            $table->string('subject');
            $table->string('dob');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('email')->unique();
            $table->string('district');
            $table->string('perm address');
            $table->string('pincode');
            $table->string('mobile');
            $table->string('birth_place');
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
        Schema::dropIfExists('teacher');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('email')->unique();
            $table->string('district');
            $table->string('perm address');
            $table->string('pincode');
            $table->string('mobile');
            $table->string('birth_place');
            $table->string('reg_no');
            $table->string('State');
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
        Schema::dropIfExists('studentdata');
    }
}

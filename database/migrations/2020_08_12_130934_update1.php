<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('fathers name')->after('name');
            $table->string('mothers name')->after('fathers name');
            $table->string('gender')->after('mothers name');
            $table->string('dob')->after('gender');
            $table->string('usn')->after('dob');
            $table->string('section')->after('usn');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('fathers name');
        $table->dropColumn('mothers name');
        $table->dropColumn('gender');
        $table->dropColumn('dob');
        $table->dropColumn('usn');
        $table->dropColumn('section');
    }
}

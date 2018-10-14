<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_code', 30)->after('password');
            $table->string('created_for', 100)->after('profile_code');
            $table->enum('gender', ['easy', 'hard'])->after('created_for');
            $table->date('dob')->after('gender');
            $table->integer('mobile_number')->after('dob');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_code');
            $table->dropColumn('created_for');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('mobile_number');
        });
    }
}

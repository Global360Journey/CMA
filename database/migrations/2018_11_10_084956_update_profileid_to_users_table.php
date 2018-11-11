<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProfileidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }


    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->string('gender',10)->change();
            $table->string('profile_code', 40)->unique()->change();
            $table->index(['dob','email','profile_code']);
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
            //
        });
    }
}

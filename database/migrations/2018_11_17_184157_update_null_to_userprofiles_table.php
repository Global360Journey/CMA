<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNullToUserprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->longText('education_background')->nullable()->change();
            $table->longText('professional_details')->nullable()->change();
            $table->longText('family_details')->nullable()->change();
            $table->longText('personal_details')->nullable()->change();
            $table->longText('partner_prefrence')->nullable()->change();
            $table->longText('about_yourself')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            //
        });
    }
}

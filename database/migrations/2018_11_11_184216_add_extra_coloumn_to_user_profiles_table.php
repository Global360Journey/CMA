<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraColoumnToUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->longText('education_background')->change();
            $table->longText('professional_details')->after("education_background");
            $table->longText('family_details')->after("professional_details");
            $table->longText('personal_details')->after("family_details");
            $table->longText('partner_prefrence')->after("personal_details");
            $table->longText('about_yourself')->after("partner_prefrence");
            $table->tinyInteger('reg_step')->after("about_yourself");
            $table->tinyInteger('profile_completion')->comment("0:Not Completed,1:Completed")->after("reg_step");
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtra2ColoumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mother_tounge',50)->after('mobile_number');
            $table->string('manglik',50)->after('mother_tounge');

            $table->unsignedInteger('religion_id')->after('manglik');
            $table->foreign('religion_id')
                  ->references('id')->on('religions')
                  ->onUpdate('cascade');
                  //->onDelete('set null');

            $table->unsignedInteger('caste_id')->after('religion_id');
            $table->foreign('caste_id')
                  ->references('id')->on('castes')
                  ->onUpdate('cascade');
                  //->onDelete('set null');
                        
            $table->unsignedInteger('sub_caste_id')->after('caste_id');
            $table->foreign('sub_caste_id')
                  ->references('id')->on('subcastes')
                  ->onUpdate('cascade');
                  //->onDelete('set null');
                  
            $table->unsignedInteger('country_id')->after('sub_caste_id');
            $table->foreign('country_id')
                  ->references('id')->on('countries')
                  ->onUpdate('cascade');
                  //->onDelete('set null');
                  
            $table->unsignedInteger('state_id')->after('country_id');
            $table->foreign('state_id')
                  ->references('id')->on('states')
                  ->onUpdate('cascade');
                  //->onDelete('set null');

                  
            $table->unsignedInteger('city_id')->after('state_id');
            $table->foreign('city_id')
                  ->references('id')->on('cities')
                  ->onUpdate('cascade');
                  //->onDelete('set null');
            $table->string('pincode',15)->after('city_id')->after('city_id');
            
            
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

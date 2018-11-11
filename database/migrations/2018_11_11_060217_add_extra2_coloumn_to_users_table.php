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

            $table->unsignedInteger('religion_id')->nullable()->after('manglik');
            $table->foreign('religion_id')
                  ->references('id')->on('religions')
                  ->onDelete('set null')->onUpdate('cascade');
                  

            $table->unsignedInteger('caste_id')->nullable()->after('religion_id');
            $table->foreign('caste_id')
                  ->references('id')->on('castes')
                  ->onDelete('set null')->onUpdate('cascade');      
           
            $table->unsignedInteger('sub_caste_id')->nullable()->after('caste_id');
            $table->foreign('sub_caste_id')
                  ->references('id')->on('subcastes')
                  ->onDelete('set null')->onUpdate('cascade');
                  
            $table->unsignedInteger('country_id')->nullable()->after('sub_caste_id');
            $table->foreign('country_id')
                  ->references('id')->on('countries')
                  ->onDelete('set null')->onUpdate('cascade');
                  
            $table->unsignedInteger('state_id')->nullable()->after('country_id');
            $table->foreign('state_id')
                  ->references('id')->on('states')
                  ->onDelete('set null')->onUpdate('cascade');

                  
            $table->unsignedInteger('city_id')->nullable()->after('state_id');
            $table->foreign('city_id')
                  ->references('id')->on('cities')
                  ->onDelete('set null')->onUpdate('cascade');

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

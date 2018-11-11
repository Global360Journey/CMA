<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcastes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('caste_id');
            $table->foreign('caste_id')
                  ->references('id')->on('castes')
                  ->onDelete('cascade');
            $table->string('sub_caste_name')->unique();
            $table->tinyInteger('status')->default(1)->comment('0:DeActive,1:Active');      
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
        Schema::dropIfExists('subcastes');
    }
}

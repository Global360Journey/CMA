<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdateCascadeToSubcastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcastes', function (Blueprint $table) {
            $table->dropForeign('subcastes_caste_id_foreign');
            
            $table->foreign('caste_id')
                  ->references('id')->on('castes')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcastes', function (Blueprint $table) {
            //
        });
    }
}

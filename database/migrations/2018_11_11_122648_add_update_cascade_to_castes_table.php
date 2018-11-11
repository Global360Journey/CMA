<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdateCascadeToCastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('castes', function (Blueprint $table) {

            $table->dropForeign('castes_religion_id_foreign');

            $table->foreign('religion_id')
                  ->references('id')->on('religions')
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
        Schema::table('castes', function (Blueprint $table) {
            //
        });
    }
}

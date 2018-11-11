<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('castes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('religion_id');
            $table->foreign('religion_id')
                  ->references('id')->on('religions')
                  ->onDelete('cascade');
            $table->string('caste_name')->unique();
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
        Schema::dropIfExists('castes');
    }
}

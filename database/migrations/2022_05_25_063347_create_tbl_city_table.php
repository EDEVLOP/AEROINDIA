<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_city', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('INT_StateID');
            $table->string('vch_citycode', 255)->nullable();
            $table->string('vch_cityname', 255)->nullable();
            $table->string('vch_status', 255)->nullable();
            $table->dateTime('DT_createdon')->useCurrent();
            $table->dateTime('DT_updatedon')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_city');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_country', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vch_countrycode', 255)->nullable();
            $table->string('vch_countryname', 255)->nullable();
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
        Schema::dropIfExists('tbl_country');
    }
}

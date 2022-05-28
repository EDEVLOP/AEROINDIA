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
            $table->string('vch_countrycode', 255);
            $table->string('vch_countryname', 150);
            $table->string('vch_status', 255)->default('Active');
            $table->timestamp('DT_createdon')->useCurrent();
            $table->timestamp('DT_updatedon')->useCurrent();
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

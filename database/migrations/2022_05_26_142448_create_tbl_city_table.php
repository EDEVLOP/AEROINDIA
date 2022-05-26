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
            $table->string('vch_cityname', 255);
            $table->integer('INT_StateID');
            $table->string('vch_citycode', 11);
            $table->string('vch_status', 11)->default('Active');
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
        Schema::dropIfExists('tbl_city');
    }
}

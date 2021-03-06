<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_state', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vch_statename', 255)->nullable();
            $table->integer('Int_CountryID')->default(1);
            $table->string('vch_statecode', 255)->nullable();
            $table->string('vch_statestatus', 255)->default('Active');
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
        Schema::dropIfExists('tbl_state');
    }
}

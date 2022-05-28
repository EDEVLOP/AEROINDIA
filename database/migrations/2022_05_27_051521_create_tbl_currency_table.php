<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_currency', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vch_countryid', 255)->nullable();
            $table->string('vch_currencycode', 255)->nullable();
            $table->string('vch_currencyname', 255)->nullable();
            $table->string('vch_status', 255)->nullable();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_currency');
    }
}

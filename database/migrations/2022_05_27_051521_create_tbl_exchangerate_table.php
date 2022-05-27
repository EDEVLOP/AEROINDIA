<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblExchangerateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_exchangerate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vch_basecurrency', 255)->nullable();
            $table->string('vch_transactioncurrency', 255)->nullable();
            $table->string('time_exchangedate', 255)->nullable();
            $table->string('INT_exchangerate', 255)->nullable();
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
        Schema::dropIfExists('tbl_exchangerate');
    }
}

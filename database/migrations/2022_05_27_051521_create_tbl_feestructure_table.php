<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFeestructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feestructure', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vch_membercategory', 255)->nullable();
            $table->string('vch_currencyname', 255)->nullable();
            $table->string('vch_membershipamount', 255)->nullable();
            $table->string('vch_status', 255)->default('Active');
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
        Schema::dropIfExists('tbl_feestructure');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClosingAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_diposit_closings', function (Blueprint $table) {
            $table->id();
            $table->integer('fdr_id')->unsigned();
            $table->integer('fdr_account')->unsigned();
            $table->date('start_date');
            $table->integer('passed_month');
            $table->integer('fdr_payable_amount');
            $table->integer('final_profit');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('closing_accounts');
    }
}

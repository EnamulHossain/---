<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedDepositBalanceTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_deposit_balance_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fdr_id')->nullable();
            $table->unsignedBigInteger('account_id')->nullable();
            $table->tinyInteger('type')->comment("1='deposit', 2='withdraw'")->nullable();
            $table->decimal('amount')->nullable();
            $table->string('processed_by')->nullable();
            $table->date('date')->nullable();
            $table->decimal('current_balance')->nullable();
            $table->decimal('new_profit_rate')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('fixed_deposit_balance_transactions');
    }
}

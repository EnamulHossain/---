<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPreviousProfitPreviousBalanceToFixedDepositBalanceTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fixed_deposit_balance_transactions', function (Blueprint $table) {
            $table->decimal('previous_balance')->nullable();
            $table->decimal('previous_profit_rate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fixed_deposit_balance_transactions', function (Blueprint $table) {
            $table->dropColumn('previous_balance');
            $table->dropColumn('previous_profit_rate');
        });
    }
}

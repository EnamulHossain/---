<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPreviousProfitProfitBalanceMainBalanceToCcLoanInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cc_loan_installments', function (Blueprint $table) {
            $table->decimal('previous_profit')->nullable();
            $table->decimal('profit_balance')->nullable();
            $table->decimal('main_balance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cc_loan_installments', function (Blueprint $table) {
            $table->dropColumn('previous_profit');
            $table->dropColumn('profit_balance');
            $table->dropColumn('main_balance');
        });
    }
}

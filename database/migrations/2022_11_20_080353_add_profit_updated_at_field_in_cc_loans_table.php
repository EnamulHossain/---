<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfitUpdatedAtFieldInCcLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cc_loans', function (Blueprint $table) {
            $table->decimal('total_profit_generated')->nullable();
            $table->decimal('opening_balance')->nullable();
            $table->date('profit_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cc_loans', function (Blueprint $table) {
            $table->dropColumn('total_profit_generated');
            $table->dropColumn('opening_balance');
            $table->dropColumn('profit_updated_at');
        });
    }
}

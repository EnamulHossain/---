<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLoanTypeToCcLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cc_loans', function (Blueprint $table) {
            $table->tinyInteger('type')->nullable()->comment("'fixed' = 1, 'monthly' =2");
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
            $table->dropColumn('type');
        });
    }
}

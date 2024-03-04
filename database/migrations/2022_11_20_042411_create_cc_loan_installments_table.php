<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcLoanInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_loan_installments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cc_loan_id')->nullable();
            $table->date('date')->nullable();
            $table->integer('installment_no')->nullable();
            $table->decimal('amount');
            $table->decimal('penalty')->nullable();
            $table->decimal('main_balance_return')->nullable();
            $table->text('note')->nullable();
            $table->string('processed_by')->nullable();
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
        Schema::dropIfExists('cc_loan_installments');
    }
}

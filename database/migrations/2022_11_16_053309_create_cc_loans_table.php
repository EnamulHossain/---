<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id')->nullable();
            $table->date('date')->default(now());
            $table->decimal('loan_amount')->nullable();
            $table->integer('installment_sequence')->nullable();
            $table->text('details')->nullable();
            $table->integer('stamp_fee')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->decimal('profit_rate')->nullable();
            $table->decimal('profit_amount')->nullable();
            $table->decimal('installment_amount')->nullable();
            $table->integer('panalty_amount')->nullable();
            $table->string('attachment')->nullable();
            $table->integer('processing_fee')->nullable();
            $table->integer('admission_fee')->nullable();
            $table->integer('insurance_fee')->nullable();
            $table->tinyInteger('status')->nullable()->comment("1='pending', 2='approved', 3='completed', 4='regected'");
            $table->string('processed_by')->nullable();
            $table->string('approved_by')->nullable();
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
        Schema::dropIfExists('cc_loans');
    }
}

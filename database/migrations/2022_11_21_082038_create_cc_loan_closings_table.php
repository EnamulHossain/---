<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcLoanClosingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_loan_closings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cc_loan_id')->nullable();
            $table->date('closing_date')->nullable();
            $table->decimal('fine')->nullable();
            $table->decimal('total_return');
            $table->decimal('discount')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('cc_loan_closings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutLoanHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_loan_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('outloan_id');
            $table->string('branch');
            $table->string('amount');
            $table->string('type');
            $table->string('current_balance')->default(0)->nullable();
            $table->string('details')->nullable();
            $table->string('attachment')->nullable();
            $table->string('out_loan_percent')->nullable();
            $table->string('interest')->nullable();
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
        Schema::dropIfExists('out_loan_histories');
    }
}

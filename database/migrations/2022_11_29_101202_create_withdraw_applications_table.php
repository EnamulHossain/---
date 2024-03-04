<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string('account_type')->nullable();
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->date('expected_date')->nullable();
            $table->integer('withdraw_amount')->nullable();
            $table->string('member_note')->nullable();
            $table->string('rejected_note')->nullable();
            $table->tinyInteger('status')->default(0)->comment("0=pending, 1= approved, 2= rejected, 3= canceled, 4 =completed");
            $table->string('process_by')->nullable();
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
        Schema::dropIfExists('withdraw_applications');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedDipositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_diposits', function (Blueprint $table) {
            $table->id();
            $table->integer('account')->unsigned();
            $table->integer('scheme_id')->unsigned();
            $table->date('starting_date');
            $table->date('ending_date');
            $table->tinyInteger('months');
            $table->integer('amount');
            $table->decimal('percent');
            $table->string('note')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('capture')->nullable();
            $table->string('capture2')->nullable();
            $table->string('cheque')->nullable();
            $table->tinyInteger('status')->default('1');

            $table->string('processed_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixed_diposits');
    }
}

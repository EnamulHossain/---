<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralAcTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_ac_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('account')->unsigned();
            $table->integer('deposit')->nullable();
            $table->integer('withdraw')->nullable();
            $table->integer('profit')->nullable();
            $table->string('note')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->string('deleted_by')->nullable();
            $table->string('processed_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_ac_transactions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('director_id');
            $table->string('branch')->nullable();
            $table->string('amount')->nullable();
            $table->string('director_balance')->nullable();
            $table->string('type')->nullable();
            $table->string('attachment')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('director_transaction_histories');
    }
}

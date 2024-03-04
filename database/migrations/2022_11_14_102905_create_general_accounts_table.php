<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->unsigned();
            $table->date('date')->nullable();
            $table->integer('target_amount')->nullable();
            $table->string('account_type')->nullable();
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
        Schema::dropIfExists('general_accounts');
    }
}

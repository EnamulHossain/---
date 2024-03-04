<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('branch');
            $table->string('holder');
            $table->integer('account');
            $table->boolean('publish');
            $table->string('address');
            $table->integer('balance');
            $table->boolean('active');
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
        Schema::dropIfExists('bank_lists');
    }
}

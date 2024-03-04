<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('branch_id');
            $table->year('year');
            $table->tinyInteger('month');
            $table->date('date');
            $table->tinyInteger('holiday')->nullable()->default(0);
            $table->tinyInteger('workday')->nullable()->default(0);
            $table->decimal('basic', 8, 2)->default(0.00);
            $table->decimal('house', 8, 2)->default(0.00);
            $table->decimal('medical', 8, 2)->default(0.00);
            $table->decimal('convenience', 8, 2)->default(0.00);
            $table->decimal('transport', 8, 2)->default(0.00);
            $table->decimal('mobile', 8, 2)->default(0.00);
            $table->decimal('other', 8, 2)->default(0.00);
            $table->decimal('overtime', 8, 2)->default(0.00);
            $table->decimal('bonus', 8, 2)->default(0.00);
            $table->decimal('deduction', 8, 2)->default(0.00);
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
        Schema::dropIfExists('salaries');
    }
}

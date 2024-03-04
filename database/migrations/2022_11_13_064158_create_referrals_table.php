<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathers_name')->nullable();
            $table->string('spouse')->nullable();
            $table->string('profession')->nullable();
            $table->string('social_status')->nullable();
            $table->string('bussiness_name')->nullable();
            $table->string('age')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('mobile')->nullable();
            $table->string('relation_with_member')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('grantor_nid')->nullable();
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
        Schema::dropIfExists('referrals');
    }
}

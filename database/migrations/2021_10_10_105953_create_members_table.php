<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("account")->unique()->nullable();
            $table->date("join")->nullable();
            $table->foreignId("area_id")->references('id')->on('areas');
            $table->string("m_name");
            $table->string("m_mobile")->length(14)->nullable();
            $table->date("m_birthday")->nullable();
            $table->string("m_father")->nullable();
            $table->string("m_mother")->nullable();
            $table->string("m_companion")->nullable();
            $table->bigInteger("m_nid")->nullable();
            $table->tinyInteger("m_gender")->nullable();
            $table->string("email")->nullable();
            $table->string("password")->nullable();
            $table->string("second_mobile")->length(14)->nullable();
            $table->string("profession")->nullable();
            $table->string("business")->nullable();
            $table->string("m_division")->nullable();//new add
            $table->string("m_district")->nullable();
            $table->string("m_thana")->nullable();
            $table->string("post_code")->nullable();
            $table->string("m_post")->nullable();
            $table->string("m_village")->nullable();
            $table->string("p_division")->nullable(); // new add
            $table->string("p_district")->nullable();
            $table->string("p_thana")->nullable();
            $table->string("p_post_c")->nullable();
            $table->string("p_post")->nullable();
            $table->string("p_village")->nullable();
            $table->string("m_photo")->nullable();
            $table->string("m_signature")->nullable();
            $table->string("nid_attachment")->nullable();
            $table->integer("admission_fee")->nullable();
            $table->integer("form_fee")->nullable();
            $table->integer("share")->nullable(); // new add
            $table->integer("regular_savings")->default(50);
            $table->boolean("active")->nullable();
            $table->integer('is_active_generalac')->default(1);
            $table->string("n_name")->nullable();
            $table->string("n_relation")->nullable();
            $table->string("n_father")->nullable();
            $table->string("n_mother")->nullable();
            $table->bigInteger("n_nid")->nullable();
            $table->string("n_mobile")->length(14)->nullable();
            $table->string("n_photo")->nullable();
            $table->string("n_division")->nullable(); // new add
            $table->string("n_district")->nullable();
            $table->string("n_sub_district")->nullable();
            $table->string("c_post")->nullable();
            $table->string("n_post")->nullable();
            $table->string("n_village")->nullable();
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
        Schema::dropIfExists('members');
    }
}

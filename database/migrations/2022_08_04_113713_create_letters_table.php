<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('flowid');
            $table->string('id_number');
            $table->string('letter_type');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('nationality_en');
            $table->string('nationality_ar');
            $table->string('jobt_en');
            $table->string('jobt_ar');
            $table->string('to_en');
            $table->string('to_ar');
            $table->date('date_issue');
            $table->date('hdate');
            $table->date('salary_next');
            $table->string('email');
            $table->string('iban')->nullable();
            $table->string('endser')->nullable();
            $table->string('endser1')->nullable();
            $table->string('salary_b_l')->nullable();
            $table->string('housing_l')->nullable();
            $table->string('trans_l')->nullable();
            $table->string('mob_all_l')->nullable();
            $table->string('other_l')->nullable();
            $table->string('total_salary_l')->nullable();
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
        Schema::dropIfExists('letters');
    }
};

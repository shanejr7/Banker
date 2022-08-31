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
        Schema::create('lending_forms', function (Blueprint $table) {
            
            $table->id();
            $table->integer('admin_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('state');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('marital_status');
            $table->string('address');
            $table->string('purpose_of_loan');
            $table->string('country');
            $table->float('loan_amount');
            $table->float('interest_rate');
            $table->string('term');
            $table->string('status');
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
        Schema::dropIfExists('lending_forms');
    }
};

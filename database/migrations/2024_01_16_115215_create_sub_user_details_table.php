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
        Schema::create('sub_user_details', function (Blueprint $table) {
            $table->integer('sub_id', true);
            $table->integer('user_id')->index('user_key_idx');
            $table->integer('sub_plan_id')->index('sub_plankey_idx');
            $table->string('amount', 45);
            $table->dateTime('start_date');
            $table->dateTime('expiry_date');
            $table->enum('status', ['active', 'canceled']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_user_details');
    }
};

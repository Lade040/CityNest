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
        Schema::create('callbackrequest', function (Blueprint $table) {
            $table->integer('call_req_id', true);
            $table->string('name', 100);
            $table->string('phone', 15);
            $table->integer('property_id')->index('callback_key_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('callbackrequest');
    }
};

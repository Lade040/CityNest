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
        Schema::create('request', function (Blueprint $table) {
            $table->integer('request_id', true);
            $table->integer('category')->index('catgerory_purpose_key_idx');
            $table->integer('beds')->nullable();
            $table->string('max_budget', 45);
            $table->integer('state')->index('state_key_idx');
            $table->integer('lga')->index('lga_key_idx');
            $table->text('more_info')->nullable();
            $table->enum('group', ['Individual', 'Agent']);
            $table->string('full_name', 200);
            $table->integer('country')->index('country_key_idx');
            $table->string('phone', 20);
            $table->string('email', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
};

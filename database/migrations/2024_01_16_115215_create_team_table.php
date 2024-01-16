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
        Schema::create('team', function (Blueprint $table) {
            $table->integer('team_id', true);
            $table->string('name', 100);
            $table->string('email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->enum('whatsapp', ['0', '1'])->nullable()->default('0');
            $table->string('role')->nullable();
            $table->integer('state')->index('prop_statekey_idx');
            $table->integer('lga')->index('prop_lgakey_idx');
            $table->string('picture', 200)->nullable();
            $table->integer('team_head')->nullable()->index('team_leadkey_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
};

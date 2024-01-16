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
        Schema::create('subproperty', function (Blueprint $table) {
            $table->integer('subpro_id', true);
            $table->string('subpro_name', 100);
            $table->integer('prop_id')->index('subpro_idkey_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subproperty');
    }
};

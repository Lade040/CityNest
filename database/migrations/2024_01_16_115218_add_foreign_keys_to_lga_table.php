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
        Schema::table('lga', function (Blueprint $table) {
            $table->foreign(['state_id'], 'lga_statekey')->references(['state_id'])->on('state')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lga', function (Blueprint $table) {
            $table->dropForeign('lga_statekey');
        });
    }
};

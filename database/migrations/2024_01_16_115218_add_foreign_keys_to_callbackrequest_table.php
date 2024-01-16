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
        Schema::table('callbackrequest', function (Blueprint $table) {
            $table->foreign(['property_id'], 'callback_key')->references(['prop_listid'])->on('property_list')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('callbackrequest', function (Blueprint $table) {
            $table->dropForeign('callback_key');
        });
    }
};

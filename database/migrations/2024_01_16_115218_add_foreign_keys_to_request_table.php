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
        Schema::table('request', function (Blueprint $table) {
            $table->foreign(['country'], 'country_key')->references(['country_id'])->on('country')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['state'], 'state_key')->references(['state_id'])->on('state')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['category'], 'catgerory_purpose_key')->references(['purpose_id'])->on('purpose')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['lga'], 'lga_key')->references(['lga_id'])->on('lga')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request', function (Blueprint $table) {
            $table->dropForeign('country_key');
            $table->dropForeign('state_key');
            $table->dropForeign('catgerory_purpose_key');
            $table->dropForeign('lga_key');
        });
    }
};

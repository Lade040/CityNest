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
        Schema::table('subproperty', function (Blueprint $table) {
            $table->foreign(['prop_id'], 'subpro_idkey')->references(['prop_id'])->on('property_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subproperty', function (Blueprint $table) {
            $table->dropForeign('subpro_idkey');
        });
    }
};

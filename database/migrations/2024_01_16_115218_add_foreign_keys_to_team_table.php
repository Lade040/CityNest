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
        Schema::table('team', function (Blueprint $table) {
            $table->foreign(['state'], 'prop_statekey')->references(['state_id'])->on('state')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['lga'], 'prop_lgakey')->references(['lga_id'])->on('lga')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['team_head'], 'team_leadkey')->references(['id'])->on('agent_landlord_developer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team', function (Blueprint $table) {
            $table->dropForeign('prop_statekey');
            $table->dropForeign('prop_lgakey');
            $table->dropForeign('team_leadkey');
        });
    }
};

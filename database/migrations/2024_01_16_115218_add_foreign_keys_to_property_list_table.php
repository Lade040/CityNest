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
        Schema::table('property_list', function (Blueprint $table) {
            $table->foreign(['sub_prop_id'], 'sub_propkey')->references(['subpro_id'])->on('subproperty')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['denomination'], 'denomination_key')->references(['id'])->on('denomination')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['prop_owner_id'], 'owner_key')->references(['id'])->on('agent_landlord_developer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['state_id'], 'prop_state')->references(['state_id'])->on('state')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['purpose'], 'purpose_key')->references(['purpose_id'])->on('purpose')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['append'], 'append_key')->references(['id'])->on('duration_size')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['features'], 'features_key')->references(['feature_id'])->on('features')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['lga_id'], 'prop_lga')->references(['lga_id'])->on('lga')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['prop_id'], 'propkey')->references(['prop_id'])->on('property_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_list', function (Blueprint $table) {
            $table->dropForeign('sub_propkey');
            $table->dropForeign('denomination_key');
            $table->dropForeign('owner_key');
            $table->dropForeign('prop_state');
            $table->dropForeign('purpose_key');
            $table->dropForeign('append_key');
            $table->dropForeign('features_key');
            $table->dropForeign('prop_lga');
            $table->dropForeign('propkey');
        });
    }
};

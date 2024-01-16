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
        Schema::table('sub_user_details', function (Blueprint $table) {
            $table->foreign(['user_id'], 'user_key')->references(['id'])->on('agent_landlord_developer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['sub_plan_id'], 'sub_plankey')->references(['sub_id'])->on('subscription')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_user_details', function (Blueprint $table) {
            $table->dropForeign('user_key');
            $table->dropForeign('sub_plankey');
        });
    }
};

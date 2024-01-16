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
        Schema::create('property_list', function (Blueprint $table) {
            $table->integer('prop_listid', true);
            $table->string('prop_title');
            $table->integer('prop_id')->index('propkey_idx');
            $table->integer('sub_prop_id')->index('sub_propkey_idx');
            $table->integer('prop_owner_id')->index('owner_key_idx');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('toilet');
            $table->string('size', 100);
            $table->enum('serviced', ['0', '1'])->nullable()->default('1');
            $table->integer('state_id')->index('prop_state_idx');
            $table->integer('lga_id')->index('prop_lga_idx');
            $table->string('price', 100);
            $table->integer('denomination')->index('denomination key_idx');
            $table->integer('append')->index('append_key');
            $table->string('initial_payment', 100)->nullable();
            $table->string('monthly_payment', 100)->nullable();
            $table->integer('duration')->nullable();
            $table->text('description');
            $table->integer('features')->nullable()->index('features_key_idx');
            $table->string('youtube_vid')->nullable();
            $table->string('instagram_vid')->nullable();
            $table->integer('purpose')->nullable()->index('purpose_key_idx');
            $table->timestamp('time_created')->nullable()->useCurrent();
            $table->timestamp('time_updated')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_list');
    }
};

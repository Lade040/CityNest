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
        Schema::create('agent_landlord_developer', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 100);
            $table->string('logo', 100)->nullable()->default('logo.png');
            $table->string('businessname', 100)->nullable();
            $table->string('phone', 20);
            $table->string('agent_whatsapp', 20)->nullable();
            $table->integer('state')->nullable();
            $table->integer('lga')->nullable();
            $table->string('email', 45);
            $table->string('address')->nullable();
            $table->text('about')->nullable();
            $table->text('service_provided')->nullable();
            $table->enum('role', ['agent', 'developer', 'landlord']);
            $table->integer('biz_state')->nullable();
            $table->integer('biz_axis')->nullable();
            $table->string('facebook')->nullable()->default('facebook.com/johndoe\\\\\'\'\'\'');
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::dropIfExists('agent_landlord_developer');
    }
};

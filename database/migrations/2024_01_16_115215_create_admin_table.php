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
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('admin_id', true);
            $table->string('admin_name', 100);
            $table->string('admin_email', 100)->unique('admin_email_UNIQUE');
            $table->string('admin_pass');
            $table->timestamp('time_created')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('time_updated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};

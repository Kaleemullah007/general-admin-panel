<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkeyModuleFeatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_features', function (Blueprint $table) {
            $table->unsignedBigInteger('module_id')->after('status');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('module_features', function (Blueprint $table) {
            $table->dropForeign(['module_id']);
            $table->dropColumn(['module_id']);
        });
    }
}

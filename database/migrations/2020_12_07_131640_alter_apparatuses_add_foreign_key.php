<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterApparatusesAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apparatuses', function (Blueprint $table) {
            $table->foreign('citizen_id')->references('id')->on('citizens');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apparatuses', function (Blueprint $table) {
            $table->dropForeign(['citizen_id', 'admin_id']);
        });
    }
}

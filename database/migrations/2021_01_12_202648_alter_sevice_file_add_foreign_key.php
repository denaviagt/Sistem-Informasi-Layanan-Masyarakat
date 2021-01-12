<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSeviceFileAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_files', function (Blueprint $table) {
            $table->foreignId('service_requirement_id')->constrained('service_requirements')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_files', function (Blueprint $table) {
            $table->dropForeign('service_requirement_id');
        });
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterServiceProceduresAddServiceCategoryId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_procedures', function (Blueprint $table) {
            $table->foreignId('service_category_id')->constrained('service_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_procedures', function (Blueprint $table) {
            $table->dropForeign(['service_category_id']);
        });
    }
}

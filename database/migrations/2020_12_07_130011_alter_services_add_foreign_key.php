<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterServicesAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->foreignId('service_category_id')->constrained('service_categories')->onDelete('NO ACTION');
            $table->foreignId('citizen_id')->constrained('citizens')->onDelete('NO ACTION');
            $table->foreignId('user_id')->constrained('users')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['service_category_id', 'citizen_id', 'user_id']);
        });
    }
}

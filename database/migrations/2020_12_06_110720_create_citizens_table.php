<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16)->nullable(false);
            $table->char('kk', 16)->nullable(false);
            $table->string('full_name')->nullable(false);
            $table->enum('gender', ['male', 'female'])->nullable(false);
            $table->string('religion')->nullable(false);
            $table->string('married_status', 10)->default(false);
            $table->string('last_education', 20)->nullable(true);
            $table->string('blood_type', 2)->nullable(true);
            $table->string('profession');
            $table->string('pob')->nullable(false);
            $table->date('dob')->nullable(false);
            $table->string('address')->nullable(false);
            $table->enum('status', ['unverified', 'verified', 'denied'])->default('unverified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}

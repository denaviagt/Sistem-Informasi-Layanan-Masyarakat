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
            $table->char('nik')->nullable(false);
            $table->char('kk')->nullable(false);
            $table->string('full_name')->nullable(false);
            $table->enum('gender', ['male', 'female'])->nullable(false);
            $table->string('religion')->nullable(false);
            $table->boolean('has_married')->default(false);
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

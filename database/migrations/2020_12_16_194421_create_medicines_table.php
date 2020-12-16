<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 15);
            $table->string('commercialName', 80)->nullable();
            $table->integer('family_id')->index('indexFamily');
            $table->string('composition', 100)->nullable();
            $table->string('effects', 100)->nullable();
            $table->string('contraindication', 100)->nullable();
            $table->foreign('family_id', 'fk_medicine_1')->references('id')->on('medecine_families')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinesVisitreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecines_visitreports', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('medicine_id')->index('mm');
            $table->integer('quantity')->nullable();
            $table->integer('visitReport_id')->index('index3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecines_visitreports');
    }
}

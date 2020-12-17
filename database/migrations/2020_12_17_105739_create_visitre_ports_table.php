<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitrePortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitre_ports', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('visits_id')->index('visits_id');
            $table->dateTime('creationDate')->nullable();
            $table->string('comment', 2048)->nullable();
            $table->integer('starScore');
            $table->integer('visitReportState_id')->default(0)->index('reportState_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitre_ports');
    }
}

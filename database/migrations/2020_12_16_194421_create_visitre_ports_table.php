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
            $table->integer('visitReportStates_id')->default(0)->index('reportState_id');
            $table->foreign('visits_id', 'visitReports_ibfk_1')->references('id')->on('visits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('visitReportStates_id', 'visitReports_ibfk_2')->references('id')->on('visitre_port_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');

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

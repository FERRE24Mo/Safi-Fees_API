<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVisitPortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visit_ports', function (Blueprint $table) {
            $table->foreign('visits_id', 'visitReports_ibfk_1')->references('id')->on('visits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('visitReportState_id', 'visitReports_ibfk_2')->references('id')->on('visit_port_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visit_ports', function (Blueprint $table) {
            $table->dropForeign('visitReports_ibfk_1');
            $table->dropForeign('visitReports_ibfk_2');
        });
    }
}

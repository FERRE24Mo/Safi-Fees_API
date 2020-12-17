<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMedecinesVisitPortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medecines_visit_ports', function (Blueprint $table) {
            $table->foreign('visitReport_id', 'fk_offer_1')->references('id')->on('visit_ports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('medicine_id', 'fk_offer_2')->references('id')->on('medicines')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medecines_visit_ports', function (Blueprint $table) {
            $table->dropForeign('fk_offer_1');
            $table->dropForeign('fk_offer_2');
        });
    }
}

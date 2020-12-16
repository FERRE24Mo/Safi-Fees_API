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
            $table->integer('medicines_id')->index('mm');
            $table->integer('quantity')->nullable();
            $table->integer('visitReports_id')->index('index3');
            $table->foreign('visitReports_id', 'fk_offer_1')->references('id')->on('visitre_ports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('medicines_id', 'fk_offer_2')->references('id')->on('medicines')->onUpdate('NO ACTION')->onDelete('NO ACTION');

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

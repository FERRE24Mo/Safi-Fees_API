<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->foreign('employee_id', 'visits_ibfk_1')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('visitState_id', 'visits_ibfk_3')->references('id')->on('visit_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('practitioner_id', 'visits_ibfk_4')->references('id')->on('practitioners')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropForeign('visits_ibfk_1');
            $table->dropForeign('visits_ibfk_3');
            $table->dropForeign('visits_ibfk_4');
        });
    }
}

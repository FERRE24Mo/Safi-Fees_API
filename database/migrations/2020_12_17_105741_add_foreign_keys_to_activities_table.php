<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->foreign('activityState_id', 'fk_caState_id')->references('id')->on('activity_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('employee_id', 'fk_complementaryActivities_1')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropForeign('fk_caState_id');
            $table->dropForeign('fk_complementaryActivities_1');
        });
    }
}

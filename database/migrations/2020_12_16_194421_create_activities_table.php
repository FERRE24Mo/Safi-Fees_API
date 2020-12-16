<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('employee_id')->index('fk_complementaryActivities_1_idx');
            $table->string('theme')->nullable();
            $table->string('request', 1024);
            $table->string('place')->nullable();
            $table->string('code', 9);
            $table->date('creationDate')->nullable();
            $table->dateTime('validationDate')->nullable();
            $table->decimal('allocatedBudget', 10);
            $table->string('unit', 8);
            $table->integer('activityStates_id')->nullable()->index('caState_id');
            $table->foreign('activityStates_id', 'fk_caState_id')->references('id')->on('activity_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::dropIfExists('activities');
    }
}

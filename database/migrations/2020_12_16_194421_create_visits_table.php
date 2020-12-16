<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('practitioners_id')->default(0)->index('practitioner_id');
            $table->integer('employees_id')->default(0)->index('employee_id');
            $table->dateTime('attendedDate')->nullable();
            $table->integer('visitStates_id')->default(0)->index('visitState_id');
            $table->foreign('employees_id', 'visits_ibfk_1')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('visitStates_id', 'visits_ibfk_3')->references('id')->on('visit_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('practitioners_id', 'visits_ibfk_4')->references('id')->on('practitioners')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}

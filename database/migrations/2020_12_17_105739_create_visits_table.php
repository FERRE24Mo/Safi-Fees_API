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
            $table->integer('practitioner_id')->default(0)->index('practitioner_id');
            $table->integer('employee_id')->default(0)->index('employee_id');
            $table->dateTime('attendedDate')->nullable();
            $table->integer('visitState_id')->default(0)->index('visitState_id');
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

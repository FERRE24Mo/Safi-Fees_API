<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesPractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_practitioners', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('specialization')->nullable();
            $table->integer('activity_id')->index('ac_num');
            $table->integer('practitioner_id')->index('fk_invite_1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities_practitioners');
    }
}

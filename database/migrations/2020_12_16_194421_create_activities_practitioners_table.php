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
            $table->integer('activities_id')->index('ac_num');
            $table->integer('practitioner_id')->index('fk_invite_1_idx');
            $table->foreign('activities_id', 'fk_ca_id')->references('id')->on('activities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('practitioner_id', 'fk_invite_1')->references('id')->on('practitioners')->onUpdate('NO ACTION')->onDelete('NO ACTION');

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

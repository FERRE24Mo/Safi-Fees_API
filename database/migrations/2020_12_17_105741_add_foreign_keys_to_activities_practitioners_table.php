<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActivitiesPractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities_practitioners', function (Blueprint $table) {
            $table->foreign('activity_id', 'fk_ca_id')->references('id')->on('activities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::table('activities_practitioners', function (Blueprint $table) {
            $table->dropForeign('fk_ca_id');
            $table->dropForeign('fk_invite_1');
        });
    }
}

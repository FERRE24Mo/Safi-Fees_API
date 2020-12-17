<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSectorDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sector_districts', function (Blueprint $table) {
            $table->foreign('sector_id', 'fk_district_sector1')->references('id')->on('sectors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sector_districts', function (Blueprint $table) {
            $table->dropForeign('fk_district_sector1');
        });
    }
}

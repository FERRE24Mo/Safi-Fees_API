<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('district_id', 'fk_departement')->references('id')->on('sector_districts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('leader_id', 'fk_leader_id')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('fk_departement');
            $table->dropForeign('fk_leader_id');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sectors', function (Blueprint $table) {
            $table->foreign('leader_id', 'sectors_ibfk_1')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sectors', function (Blueprint $table) {
            $table->dropForeign('sectors_ibfk_1');
        });
    }
}

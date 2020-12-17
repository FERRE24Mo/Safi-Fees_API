<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 5)->nullable();
            $table->integer('leader_id')->nullable()->index('leader_id');
            $table->integer('sectorDistrict_id')->index('departement_id');
            $table->string('postalCode')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('login', 45)->nullable();
            $table->text('password')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('releaseDate')->nullable();
            $table->date('entryDate')->nullable();
            $table->string('token', 64)->nullable();
            $table->integer('timespan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

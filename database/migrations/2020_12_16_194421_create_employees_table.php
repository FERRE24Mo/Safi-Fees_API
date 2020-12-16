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
            $table->integer('district_id')->index('departement_id');
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
        Schema::dropIfExists('employees');
    }
}

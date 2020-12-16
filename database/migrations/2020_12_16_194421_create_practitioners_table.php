<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioners', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('address')->nullable();
            $table->string('tel')->nullable();
            $table->integer('notorietyCoeff')->nullable();
            $table->string('complementarySpeciality', 50)->nullable();
            $table->integer('district_id')->nullable()->index('fk_practitioner_department1_idx');
            $table->foreign('district_id', 'fk_practitioner_department1')->references('id')->on('sector_districts')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practitioners');
    }
}

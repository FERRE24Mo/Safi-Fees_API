<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsEmployeesPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications_employees_privileges', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('employees_id')->index('employees_id');
            $table->integer('applications_id')->index('applications_id');
            $table->integer('privileges_id')->index('privileges_id');
            $table->dateTime('creationDate');
            $table->boolean('activated');
            $table->unique(['applications_id', 'employees_id', 'privileges_id'], 'applications_id_2');
            $table->foreign('applications_id', 'applications_employees_privileges_ibfk_1')->references('id')->on('applications')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('employees_id', 'applications_employees_privileges_ibfk_2')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('privileges_id', 'applications_employees_privileges_ibfk_3')->references('id')->on('privileges')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications_employees_privileges');
    }
}

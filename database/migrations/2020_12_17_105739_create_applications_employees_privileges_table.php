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
            $table->integer('employee_id')->index('employees_id');
            $table->integer('application_id')->index('applications_id');
            $table->integer('privilege_id')->index('privileges_id');
            $table->dateTime('creationDate');
            $table->boolean('activated');
            $table->unique(['application_id', 'employee_id', 'privilege_id'], 'applications_id_2');
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

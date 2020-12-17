<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToApplicationsEmployeesPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications_employees_privileges', function (Blueprint $table) {
            $table->foreign('application_id', 'applications_employees_privileges_ibfk_1')->references('id')->on('applications')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('employee_id', 'applications_employees_privileges_ibfk_2')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('privilege_id', 'applications_employees_privileges_ibfk_3')->references('id')->on('privileges')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications_employees_privileges', function (Blueprint $table) {
            $table->dropForeign('applications_employees_privileges_ibfk_1');
            $table->dropForeign('applications_employees_privileges_ibfk_2');
            $table->dropForeign('applications_employees_privileges_ibfk_3');
        });
    }
}

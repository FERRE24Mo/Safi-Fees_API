<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpenseInPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_in_packages', function (Blueprint $table) {
            $table->foreign('id', 'expenseInPackages_ibfk_1')->references('id')->on('expenses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('expensePackageType_id', 'fk_packageCost_packageType1')->references('id')->on('expense_package_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_in_packages', function (Blueprint $table) {
            $table->dropForeign('expenseInPackages_ibfk_1');
            $table->dropForeign('fk_packageCost_packageType1');
        });
    }
}

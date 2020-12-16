<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseInPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_in_packages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('expensePackageType_id')->index('fk_packageCost_packageType1_idx');
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
        Schema::dropIfExists('expense_in_packages');
    }
}

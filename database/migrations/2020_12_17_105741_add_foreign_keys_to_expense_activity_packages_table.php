<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpenseActivityPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_activity_packages', function (Blueprint $table) {
            $table->foreign('id', 'expenseActivityPackages_ibfk_1')->references('id')->on('expenses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('activity_id', 'expenseActivityPackages_ibfk_2')->references('id')->on('activities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('expenseProof_id', 'expenseActivityPackages_ibfk_3')->references('id')->on('expense_proofs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_activity_packages', function (Blueprint $table) {
            $table->dropForeign('expenseActivityPackages_ibfk_1');
            $table->dropForeign('expenseActivityPackages_ibfk_2');
            $table->dropForeign('expenseActivityPackages_ibfk_3');
        });
    }
}

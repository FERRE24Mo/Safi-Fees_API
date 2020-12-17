<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpenseOutPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_out_packages', function (Blueprint $table) {
            $table->foreign('expenseProof_id', 'expenseOutPackages_ibfk_1')->references('id')->on('expense_proofs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('id', 'expenseOutPackages_ibfk_2')->references('id')->on('expenses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_out_packages', function (Blueprint $table) {
            $table->dropForeign('expenseOutPackages_ibfk_1');
            $table->dropForeign('expenseOutPackages_ibfk_2');
        });
    }
}

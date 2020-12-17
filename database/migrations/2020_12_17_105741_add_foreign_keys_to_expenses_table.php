<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->foreign('expenseSheet_id', 'expenses_ibfk_1')->references('id')->on('expense_sheets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('expenseState_id', 'expenses_ibfk_2')->references('id')->on('expense_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign('expenses_ibfk_1');
            $table->dropForeign('expenses_ibfk_2');
        });
    }
}

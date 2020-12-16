<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('expenseSheets_id')->index('expenseSheets_id');
            $table->integer('expenseStates_id')->index('expenseStates_id');
            $table->integer('quantity')->nullable()->default(0);
            $table->date('creationDate');
            $table->foreign('expenseSheets_id', 'expenses_ibfk_1')->references('id')->on('expense_sheets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('expenseStates_id', 'expenses_ibfk_2')->references('id')->on('expense_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}

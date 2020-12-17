<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpenseSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_sheets', function (Blueprint $table) {
            $table->foreign('employee_id', 'fk_employe_ficheFrais')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('expenseSheetState_id', 'fk_etat_ficheFrais')->references('id')->on('expense_sheet_states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_sheets', function (Blueprint $table) {
            $table->dropForeign('fk_employe_ficheFrais');
            $table->dropForeign('fk_etat_ficheFrais');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpenseProofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_proofs', function (Blueprint $table) {
            $table->foreign('expenseProofType_id', 'expenseProofs_ibfk_1')->references('id')->on('expense_proof_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_proofs', function (Blueprint $table) {
            $table->dropForeign('expenseProofs_ibfk_1');
        });
    }
}

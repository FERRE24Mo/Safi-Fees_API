<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseProofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_proofs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description')->nullable();
            $table->string('filePath', 512)->nullable();
            $table->integer('expenseProofTypes_id')->index('expenseProofTypes_id');
            $table->dateTime('uploadDate');
            $table->foreign('expenseProofTypes_id', 'expenseProofs_ibfk_1')->references('id')->on('expense_proof_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_proofs');
    }
}

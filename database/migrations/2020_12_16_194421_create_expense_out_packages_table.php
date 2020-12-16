<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseOutPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_out_packages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description')->nullable();
            $table->decimal('amount', 10);
            $table->string('unit', 16);
            $table->integer('expenseProofs_id')->nullable()->index('fk_outPackage_justificatory1_idx');
            $table->foreign('expenseProofs_id', 'expenseOutPackages_ibfk_1')->references('id')->on('expense_proofs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::dropIfExists('expense_out_packages');
    }
}

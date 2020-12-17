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
            $table->integer('expenseProof_id')->nullable()->index('fk_outPackage_justificatory1_idx');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseActivityPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_activity_packages', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('description');
            $table->decimal('amount', 10);
            $table->string('unit', 8);
            $table->integer('expenseProofs_id')->nullable()->index('expenseProofs_id');
            $table->integer('activities_id')->index('activities_id');
            $table->foreign('id', 'expenseActivityPackages_ibfk_1')->references('id')->on('expenses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('activities_id', 'expenseActivityPackages_ibfk_2')->references('id')->on('activities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('expenseProofs_id', 'expenseActivityPackages_ibfk_3')->references('id')->on('expense_proofs')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_activity_packages');
    }
}

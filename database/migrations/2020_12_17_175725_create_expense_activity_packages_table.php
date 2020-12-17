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
            $table->integer('expenseProof_id')->nullable()->index('expenseProofs_id');
            $table->integer('activity_id')->index('activities_id');
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

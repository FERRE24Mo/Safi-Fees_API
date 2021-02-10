<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;


    public function inPackage()
    {
        return $this->belongsTo(ExpenseInPackage::class , 'id');
    }

    public function out()
    {
        return $this->belongsTo(ExpenseOutPackage::class , 'id');
    }

    public function activity()
    {
        return $this->belongsTo(ExpenseActivityPackage::class , 'id');
    }

    public static function getAllInformations($expense)
    {
        $expense->inPackage;
        $expense->out;
        $expense->activity;

        if ($expense->inPackage !== null){
            $expense->inPackage->typePackage;
        }
        elseif($expense->out !== null){
            $expense->out->proof;
            if ($expense->out->proof != null){
                $expense->out->proof->typeProof;
            }
        }
        elseif($expense->activity !== null){
            $expense->activity->proof;
            if ($expense->activity->proof != null){
                $expense->activity->proof->typeProof;
            }
        }
    }


}

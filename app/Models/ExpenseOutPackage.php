<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseOutPackage extends Model
{
    use HasFactory;


    public function proof()
    {
        return $this->belongsTo(ExpenseProof::class, 'expenseProof_id');
    }
}

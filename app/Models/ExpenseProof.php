<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseProof extends Model
{
    use HasFactory;

    public function typeProof()
    {
        return $this->belongsTo(ExpenseProofType::class, 'expenseProofType_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseInPackage extends Model
{
    use HasFactory;


    public function typePackage()
    {
        return $this->belongsTo(ExpensePackageType::class , 'expensePackageType_id');
    }

}

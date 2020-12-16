<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitState extends Model
{
    use HasFactory;

    public function visits(){
        return $this->hasMany('App\Models\Visit');
    }
}

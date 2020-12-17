<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $hidden = ['password','token'];

    public function visits(){
        return $this->hasMany('App\Models\Visit');
    }
}

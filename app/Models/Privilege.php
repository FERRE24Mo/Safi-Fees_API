<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    use HasFactory;

    public function privileges()
    {
        return $this->hasMany(ApplicationsEmployeesPrivilege::class , 'privilege_id');
    }
}

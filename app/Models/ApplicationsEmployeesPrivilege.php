<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationsEmployeesPrivilege extends Model
{
    use HasFactory;

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function application(){
        return $this->belongsTo(Application::class , 'application_id');
    }

    public function type(){
        return $this->belongsTo(Privilege::class , 'privilege_id');
    }
}

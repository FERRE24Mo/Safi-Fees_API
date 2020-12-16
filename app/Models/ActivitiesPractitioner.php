<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitiesPractitioner extends Model
{
    use HasFactory;

    public function activity() {
        return $this->belongsTo('App\Models\Activity');
    }

    public function practitioner() {
        return $this->belongsTo('App\Models\Practitioner');
    }
}

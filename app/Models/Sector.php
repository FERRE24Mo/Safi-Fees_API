<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    public function sectorDistricts()
    {
        return $this->hasMany('App\Models\SectorDistrict');
    }


}

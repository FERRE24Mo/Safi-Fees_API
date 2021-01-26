<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SectorDistrict;
use Illuminate\Http\Request;

class SectorDistrictController extends Controller
{
    public function index()
    {
        return response()->json(SectorDistrict::all());
    }
}

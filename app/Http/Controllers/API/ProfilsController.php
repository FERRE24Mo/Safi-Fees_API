<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Sector;
use App\Models\SectorDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $employees = Employee::all();

        foreach ($employees as $employee){
            $employee->getAllInformations();
        }

        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);

        $employee->getAllInformations();

        return response()->json($employee);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $int11 = "99999999999";

        $validator = Validator::make($request->all(), [
            'login'=>'required|string|max:45',
            'code'=>'required|string|max:5',
            'sectorDistrict_id'=>'required|numeric|max:'.$int11,
            'leader_id'=>'numeric|max:'.$int11,
            'postalCode'=>'required|string|max:5',
            'firstname'=>'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'address'=>'required|string|max:255',
            'city'=>'required|string|max:255',
            'phone'=>'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>'error']);
        }

        return response()->json(Employee::find($id)->update($request->all()));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

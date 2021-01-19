<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use Illuminate\Http\Request;


class PractitionersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practitioners = Practitioner::all();


        return response()->json($practitioners);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $practitioners = Practitioner::find($id);



        return response()->json($practitioners);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $practitioner = new Practitioner();

        $practitioner->lastname = $request->input('lastname');
        $practitioner->firstname = $request->input('firstname');
        $practitioner->address = $request->input('address');
        $practitioner->tel = $request->input('tel');
        $practitioner->notorietyCoeff = $request->input('notorietyCoeff');
        $practitioner->complementarySpeciality = $request->input('complementarySpeciality');
        $practitioner->district_id = $request->input('district_id');

        return response()->json($practitioner->save());
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


        $practitioner = Practitioner::find($id);

        $practitioner->lastname = $request->input('lastname');
        $practitioner->firstname = $request->input('firstname');
        $practitioner->address = $request->input('address');
        $practitioner->tel = $request->input('tel');
        $practitioner->notorietyCoeff = $request->input('notorietyCoeff');
        $practitioner->complementarySpeciality = $request->input('complementarySpeciality');
        $practitioner->district_id = $request->input('district_id');

        return response()->json($practitioner->save());


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $practitioner = Practitioner::find($id);

        $practitioner->delete();
        return response()->json(['status' => 'Success', 'Message' => 'Practitioner Deleted']);
    }
}

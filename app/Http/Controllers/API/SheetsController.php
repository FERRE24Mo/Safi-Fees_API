<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExpenseSheet;
use Illuminate\Http\Request;

class SheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sheets = ExpenseSheet::all();

        return response()->json($sheets);

    }

    public function current(){
        $currentSheet = ExpenseSheet::firstwhere('sheetState_id',1);

        return response()->json($currentSheet);
    }

    public function currentUpdate($request, $id){

        $currentSheet = ExpenseSheet::where('sheetState_id', 1);

        return response()->json($currentSheet);
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
        //
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
        //
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

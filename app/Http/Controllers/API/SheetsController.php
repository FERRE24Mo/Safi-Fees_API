<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExpenseSheet;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

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

        $date = new Date();
        $date = $date::now()->format('Y-m');


        $currentSheet = ExpenseSheet::where('creationDate', 'like', $date . '-%')->get();

        return response()->json([$currentSheet, $date]);
    }

    public function last(){

        $date = new Date();
        $date = $date::now()->sub('1 month')->format('Y-m');

        $currentSheet = ExpenseSheet::where('creationDate', 'like', $date . '-%')->get();

        return response()->json([$currentSheet]);
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
        $currentSheet = ExpenseSheet::find($id);

        return response()->json($currentSheet);
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

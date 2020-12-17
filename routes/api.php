<?php

use App\Http\Controllers\API\ExpensesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 * Test des models de l'api
 */
Route::get('/', function (){
    $visit = \App\Models\Employee::find(56);
    $visit->visits;
    $visit->visits[0]->practitioner;
    return response()->json($visit);
    //test
});

/**
 *
 * Expenses
 */


Route::apiResource('expenses',ExpensesController::class);

Route::apiResource('employees',\App\Http\Controllers\API\EmployeesController::class);


/**
 *
 * Sheets
 */

//Route::apiResource('sheets',\App\Http\Controllers\API\SheetsController::class);

Route::get('sheets',[\App\Http\Controllers\API\SheetsController::class,'index']);
Route::get('sheets/current',[\App\Http\Controllers\API\SheetsController::class,'current']);


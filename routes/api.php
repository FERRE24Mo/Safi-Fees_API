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

/**
 * Test des models de l'api
 */
Route::get('/', function () {
    $visit = \App\Models\Employee::find(56);
    $visit->visits;
    $visit->visits[0]->practitioner;
    return response()->json($visit);
    //test
});






//token jwt
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [\App\Http\Controllers\Api\AuthController::class , 'login']);
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class , 'logout']);
    Route::post('refresh', [\App\Http\Controllers\Api\AuthController::class , 'refresh']);
    Route::post('me', [\App\Http\Controllers\Api\AuthController::class , 'me']);

});

//securisation of the api
Route::middleware('jwt.auth')->group(function (){

    /**
     *
     * Expenses
     */
    Route::apiResource('expenses',ExpensesController::class);

    /**
     *
     * Employees
     */
    Route::apiResource('employees',\App\Http\Controllers\API\EmployeesController::class);

    /**
     *
     * Sheets
     */
    Route::get('sheets/{employee_id}/current',[\App\Http\Controllers\API\SheetsController::class,'current']);
    Route::get('sheets/{employee_id}/last',[\App\Http\Controllers\API\SheetsController::class,'last']);

    Route::apiResource('sheets',\App\Http\Controllers\API\SheetsController::class);


    /**
     * profils
     */
    Route::apiResource('profils',\App\Http\Controllers\API\ProfilsController::class);
});





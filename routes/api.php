<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PlainController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\InvoiceController;

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
 
Route::middleware('jwt.auth')->get('user/token', function () {
    $user = Auth::user();
    return response()->json($user);
});


Route::prefix("admin")->group(function ()
{
    Route::post("login",[AuthController::class, "login"]);
    Route::post("register",[AuthController::class, "register"]);
    Route::apiResource("costumers", CostumerController::class);  
    Route::apiResource("companies", CompanyController::class);
    Route::apiResource("employees", EmployeeController::class);
    Route::apiResource("positions", PositionController::class);
    Route::apiResource("plains", PlainController::class);
    Route::apiResource("signatures", SignatureController::class);
    Route::apiResource("invoices", InvoiceController::class);    
});

Route::get("countries", [CountryController::class, "index"]);
Route::get("cities", [CityController::class, "index"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

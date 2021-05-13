<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoneyController;


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
Route::post('v1/access/token', [MoneyController::class, 'generateAccessToken']);
Route::post('v1/hlab/stk/push', [MoneyController::class, 'customerMpesaSTKPush']);

Route::post('v1/hlab/validation', [MoneyController::class, 'mpesaValidation']);
Route::post('v1/hlab/transaction/confirmation', [MoneyController::class,'mpesaConfirmation']);
Route::post('v1/hlab/register/url', [MoneyController::class,'mpesaRegisterUrls']);


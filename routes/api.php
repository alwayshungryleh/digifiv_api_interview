<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){
    Route::get('/getinventories', 'InventoryController@getinventories');
    Route::post('/remove3randominventory', 'InventoryController@remove3randominventory');

});

Route::post('/test', function(Request $request){
    if($request->test == 'test'){
        return "Test Request Successful";
    } else {
        return $request->test . " is not 'test'. Please send 'test'";
    }
});
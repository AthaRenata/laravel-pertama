<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\User\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(ApiUserController::class)
    ->prefix("/users")
    ->group(function () {

        Route::get("/", "index"); // list user => /users/
        Route::get("/{id}", "show"); // show user by id => /users/{id}
        Route::post("/", "store"); // create user => /users/
        Route::put("/{id}", "update"); // update user => /users/{id}
        Route::delete("/{id}", "destroy"); // destroy user => /users/{id}
    
    });

    
Route::get("/basic-auth",function(Request $request){
    $username="atha";
    $password="123";
    return $request->header();
});

Route::get("/api-key",function(Request $request){
    $username="atha";
    $password="123";
    return $request->header();
});

Route::post('/login',[ApiAuthController::class,'login']);
Route::post('/logout',[ApiAuthController::class,'logout']);

Route::get('/profile',function(){
    return "PROFILE";
})->middleware('api-auth');
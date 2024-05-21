<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InstrumenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/login",fn()=> view("auth.login"))->name("auth.page.login");
Route::post("/login",[AuthController::class,"login"])->name("auth.login");
Route::get("/register",fn()=> view("auth.register"))->name("auth.page.register");
Route::post("/register",[AuthController::class,"register"])->name("auth.register");


route::prefix("admin")->group(function(){
    route::get("dashboard",fn()=>view("admin.dashboard"))->name("admin.dashboard");
    route::resource("groups",GroupController::class);
    route::resource("instruments",InstrumenController::class);
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InstrumenController;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\UserInstrumentController;
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

Route::get("/login", fn () => view("auth.login"))->name("auth.page.login");
Route::post("/login", [AuthController::class, "login"])->name("auth.login");
Route::get("/register", fn () => view("auth.register"))->name("auth.page.register");
Route::post("/register", [AuthController::class, "register"])->name("auth.register");

// Route Admin
route::prefix("admin")->group(function () {
    route::get("dashboard", fn () => view("admin.dashboard"))->name("admin.dashboard");
    route::resource("groups", GroupController::class);
    route::resource("instruments", InstrumenController::class);
});

// Route User
route::prefix('user')->group(function () {
    route::get('dashboard', [DashboardUserController::class, 'index'])->name('user.dashboard');
    route::resource("user-groups", UserGroupController::class);
    route::resource("user-instruments", UserInstrumentController::class);

});

route::prefix("admin")->group(function(){
    route::get("dashboard",fn()=>view("admin.dashboard"))->name("admin.dashboard");
    route::resource("groups",GroupController::class);
    route::resource("instruments",InstrumenController::class);
    route::controller(CriteriaController::class)->group(function(){
        route::get("criteria/{instrumen_id}","index")->name("criteria.index");
        route::get("criteria/create/{instrumen_id}","create")->name("criteria.create");
        route::post("criteria/store/{instrumen_id}","store")->name("criteria.store");
        route::get("criteria/{criteria}/show","show")->name("criteria.show");
        route::get("criteria/{criteria}/edit","edit")->name("criteria.edit");
        route::put("criteria/{criteria}/update","update")->name("criteria.update");
        route::delete("criteria/{criteria}/destroy","destroy")->name("criteria.destroy");
    });
});

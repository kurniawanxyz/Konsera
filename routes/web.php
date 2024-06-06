<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InstrumenController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\SubKriteriaController;
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
// route::prefix("admin")->group(function () {
//     route::get("dashboard", fn () => view("admin.dashboard"))->name("admin.dashboard");
//     route::resource("groups", GroupController::class);
//     route::resource("instruments", InstrumenController::class);
// });


Route::middleware("auth")->group(function(){
  Route::post("/logout",[AuthController::class,"logout"])->name("auth.logout");
});

// Route User
Route::prefix('user')->group(function () {
    Route::get('dashboard', [DashboardUserController::class, 'index'])->name('user.dashboard');
    Route::resource("user-groups", UserGroupController::class);
    Route::resource("user-instruments", UserInstrumentController::class);

});

Route::prefix("admin")->group(function(){
    Route::get("dashboard",fn()=>view("admin.dashboard"))->name("admin.dashboard");
    Route::resource("groups",GroupController::class);
    Route::resource("instruments",InstrumenController::class);
    Route::controller(CriteriaController::class)->group(function(){
        Route::get("criteria/{instrumen_id}","index")->name("criteria.index");
        Route::get("criteria/create/{instrumen_id}","create")->name("criteria.create");
        Route::post("criteria/store/{instrumen_id}","store")->name("criteria.store");
        Route::get("criteria/{criteria}/show","show")->name("criteria.show");
        Route::get("criteria/{criteria}/edit","edit")->name("criteria.edit");
        Route::put("criteria/{criteria}/update","update")->name("criteria.update");
        Route::delete("criteria/{criteria}/destroy","destroy")->name("criteria.destroy");
    });
    Route::controller(SubKriteriaController::class)->group(function(){
        Route::get("subCriteria/{instrumen_id}","index")->name("subCriteria.index");
        Route::get("subCriteria/create/{instrumen_id}","create")->name("subCriteria.create");
        Route::post("subCriteria/store/{instrumen_id}","store")->name("subCriteria.store");
        Route::get("subCriteria/{subCriteria}/show","show")->name("subCriteria.show");
        Route::get("subCriteria/{subCriteria}/edit","edit")->name("subCriteria.edit");
        Route::put("subCriteria/{subCriteria}/update","update")->name("subCriteria.update");
        Route::delete("subCriteria/{subCriteria}/destroy","destroy")->name("subCriteria.destroy");
        Route::post("subCriteriaImport/{instrumen_id}",[SubKriteriaController::class,"import"])->name("subCriteria.import");
    });
    Route::controller(StatementController::class)->group(function(){
        Route::get("statements/{sub_criteria_id}","index")->name("statements.index");
        Route::get("statements/create/{sub_criteria_id}","create")->name("statements.create");
        Route::post("statements/store/{sub_criteria_id}","store")->name("statements.store");
        Route::get("statements/{statements}/show","show")->name("statements.show");
        Route::get("statements/{statements}/edit","edit")->name("statements.edit");
        Route::put("statements/{statements}/update","update")->name("statements.update");
        Route::delete("statements/{statements}/destroy","destroy")->name("statements.destroy");
    });
});

<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// AUTH CONTROLLER
Route::get('/',[UserController::class,'getLogin'])->name('acceuil');
Route::post('/user-login',[UserController::class,'login'])->name('user-login');
Route::get('/user-logout',[UserController::class,'logout']);

Route::get('/registration',[UserController::class,'getRegistration']);
Route::post('/registration',[UserController::class,'registration']);

// PANEL CONTROLLER
Route::get('/panel',[PanelController::class,'getPanel'])->middleware('auth');

// AGENT CONTROLLER
Route::get('/getAgentManage',[AgentController::class,'getAgentManage']);
Route::get('/add-agent',[AgentController::class,'getAddAgent']);
Route::post('/add-agent',[AgentController::class,'addAgent']);
Route::get('/agent/{agent}/update',[AgentController::class,'getUpdateAgent']);
Route::patch('/agent/{id}/update',[AgentController::class,'updateAgent']);
Route::get('/agent/{agent}/delete',[AgentController::class,'deleteAgent']);
Route::get('/agent/{agent}/show',[AgentController::class,'showAgent']);



// SERVICES CONTROLLER
Route::get('/getServiceManage',[ServicesController::class,'getServicesManage']);
Route::get('/add-service',[ServicesController::class,'getAddService']);
Route::post('/add-service',[ServicesController::class,'addService']);
Route::get('/service/{service}/update',[ServicesController::class,'getUpdateService']);
Route::patch('/service/{id}/update',[ServicesController::class,'updateService']);
Route::get('/service/{service}/delete',[ServicesController::class,'deleteService']);
Route::get('/service/{service}/show',[ServicesController::class,'showService']);


// DIRECTIONS CONTROLLER
Route::get('/getDirectionsManage',[DirectionController::class,'getDirectionsManage']);
Route::get('/add-direction',[DirectionController::class,'getAddDirection']);
Route::post('/add-direction',[DirectionController::class,'addDirection']);
Route::get('/direction/{direction}/update',[DirectionController::class,'getUpdateDirection']);
Route::patch('/direction/{id}/update',[DirectionController::class,'updateDirection']);
Route::get('/direction/{direction}/delete',[DirectionController::class,'deleteDirection']);
Route::get('/direction/{direction}/show',[DirectionController::class,'showDirection']);


// DEPARTEMENTS CONTROLLER
Route::get('/getDepartementsManage',[DepartementController::class,'getDepartementsManage']);
Route::get('/add-departement',[DepartementController::class,'getAddDepartement']);
Route::post('/add-departement',[DepartementController::class,'addDepartement']);
Route::get('/departement/{departement}/update',[DepartementController::class,'getUpdateDepartement']);
Route::patch('/departement/{id}/update',[DepartementController::class,'updateDepartement']);
Route::get('/departement/{departement}/delete',[DepartementController::class,'deleteDepartement']);
Route::get('/departement/{departement}/show',[DepartementController::class,'showDepartement']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\MastermanagementController;
use App\Http\Controllers\TraningController;
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

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
Route::get('/usermanagement', [UserController::class,'getusers'])->name('usermanagement'); 
Route::post('/saveuser', [UserController::class,'saveuser'])->name('saveuser');
Route::get('/getdzongkhag', [UserController::class,'getdzongkhaglist'])->name('getdzongkhag');
Route::get('/gewog/{id}', [UserController::class,'gewoglist'])->name('gewog');
Route::get('/village/{id}', [UserController::class,'getvillagelist'])->name('village');
Route::get('/newogranozation', [UserController::class,'newogranozation'])->name('newogranozation'); 

Route::resource('/organizationIndex', OrgController::class); 
Route::get('/applytraining', [TraningController::class, 'trainingindex'])->name("applytraining");
Route::get('/masterManagement', [MastermanagementController::class,'masterManagementindex'])->name('masterManagement');

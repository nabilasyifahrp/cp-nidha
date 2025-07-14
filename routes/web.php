<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IotPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TrainingController;
use App\Models\Advantage;
use App\Http\Controllers\PartnerController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/training-center', [TrainingCenterController::class, 'index'])->name('training.center');


//Autentikasi
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    //Admin Panel Index
    Route::get('/admin/panel', [AdminController::class, 'home'])->name('admin.panel');

    // Training
    Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');
    Route::get('/trainings/create', [TrainingController::class, 'create'])->name('trainings.create');
    Route::post('/trainings/store', [TrainingController::class, 'store'])->name('trainings.store');
    Route::get('/trainings/edit/{id}', [TrainingController::class, 'edit'])->name('trainings.edit');
    Route::put('/trainings/update/{id}', [TrainingController::class, 'update'])->name('trainings.update');
    Route::delete('/trainings/{id}', [TrainingController::class, 'destroy'])->name('trainings.destroy');
    Route::get('/trainings/{id}', [TrainingController::class, 'read'])->name('trainings.read');

    // Advantage
    Route::get('/advantages', [AdvantageController::class, 'index'])->name('advantages.index');
    Route::get('/advantages/create', [AdvantageController::class, 'create'])->name('advantages.create');
    Route::post('/advantages/store', [AdvantageController::class, 'store'])->name('advantages.store');
    Route::get('/advantages/edit/{id}', [AdvantageController::class, 'edit'])->name('advantages.edit');
    Route::put('/advantages/update/{id}', [AdvantageController::class, 'update'])->name('advantages.update');
    Route::delete('/advantages/{id}', [AdvantageController::class, 'destroy'])->name('advantages.destroy');
    Route::get('/advantages/{id}', [AdvantageController::class, 'read'])->name('advantages.read');

    //PARTNERS
    Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('partners', PartnerController::class);
    Route::get('/iot', [IotPageController::class, 'index'])->name('iot');

    //TEAM 
    Route::resource('team', \App\Http\Controllers\TeamController::class);

    //MANPOWER SUPPLY
    Route::get('/manpower-supply', [App\Http\Controllers\ManPowerController::class, 'index'])->name('manpower.index');


    });
    

});



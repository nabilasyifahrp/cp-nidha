<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IotPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ManPowerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TrainingController;
use App\Models\Partner;

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

    // Service
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::get('/service/{id}', [ServiceController::class, 'read'])->name('service.read');

    // Team
    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::get('/team/{id}', [TeamController::class, 'read'])->name('team.read');

   // Partner 
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/partners/store', [PartnerController::class, 'store'])->name('partners.store');
Route::get('/partners/edit/{partner}', [PartnerController::class, 'edit'])->name('partners.edit'); 
Route::put('/partners/update/{partner}', [PartnerController::class, 'update'])->name('partners.update'); 
Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
Route::get('/partners/{partner}', [PartnerController::class, 'read'])->name('partners.read');

//ManPowerSupply
Route::get('/training-center', [TrainingCenterController::class, 'index'])->name('training.center');
Route::get('/iot', [IotPageController::class, 'index'])->name('iot');
Route::get('/manpower-supply', [ManPowerController::class, 'index'])->name('manpower.index');

});






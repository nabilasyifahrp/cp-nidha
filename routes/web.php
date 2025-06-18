<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\AppointmentRequestController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TrainingController;
use App\Models\Advantage;

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

Route::get('/', function () {
    return view('layouts.app');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index']);

// Route::post('/grootech/appointment/send', [AppointmentController::class, 'send'])->name('grootech.appointment.send');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::post('/contacts/store-multiple', [ContactController::class, 'storeMultiple'])->name('contacts.storeMultiple');

Route::get('contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');

Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

Route::post('/update-contact', [ContactController::class, 'update']);

Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::post('/contacts/update', [ContactController::class, 'update'])->name('contacts.update');


//Appointment Request
Route::post('/appointment-request', [AppointmentRequestController::class, 'store'])->name('appointment.request.store');

//Autentikasi
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    //Admin Panel Index
    Route::get('/admin/panel', [AdminController::class, 'home'])->name('admin.panel');

    //Produk
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/read/{id}', [ProductController::class, 'read'])->name('product.read');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    //Portfolio
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio/read/{id}', [PortfolioController::class, 'read'])->name('portfolio.read');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

    //Team
    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('/team/read/{id}', [TeamController::class, 'read'])->name('team.read');
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

    //Client
    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
    Route::get('/client/read/{id}', [ClientController::class, 'read'])->name('client.read');

    // Testimonial
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/edit/{testimonial}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('/testimonials/update/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

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
});
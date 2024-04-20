<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LoginController;

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


Route::get('/home', function () {
    return view('home');
});



Route::prefix('about')->group(function () {
    Route::get('', [ProfileController::class, 'getData'])->name('data.show');
    Route::prefix('profile')->group(function () {
        Route::get('edit', [ProfileController::class, 'editProfile'])->name('profile.edit')->middleware('auth');
        Route::post('update', [ProfileController::class, 'updateProfile'])->name('profile.update')->middleware('auth');
    });

    Route::prefix('education')->group(function () {
        Route::get('create', [EducationController::class, 'showCreateForm'])->name('show.create')->middleware('auth');
        Route::post('create', [EducationController::class, 'createEducation'])->name('create.education')->middleware('auth');
        Route::get('edit/{id}', [EducationController::class, 'editEducation'])->name('edit.education')->middleware('auth');
        Route::post('update/{id}', [EducationController::class, 'updateEducation'])->name('update.education')->middleware('auth');
        Route::get('delete/{id}', [EducationController::class, 'deleteEducation'])->name('delete.education')->middleware('auth');
    });

    Route::prefix('experience')->group(function () {
        Route::get('create', [ExperienceController::class, 'showCreateFormExp'])->name('show.createExp')->middleware('auth');
        Route::post('create', [ExperienceController::class, 'createExperience'])->name('create.experience')->middleware('auth');
        Route::get('edit/{id}', [ExperienceController::class, 'editExperience'])->name('edit.experience')->middleware('auth');
        Route::post('update/{id}', [ExperienceController::class, 'updateExperience'])->name('update.experience')->middleware('auth');
        Route::get('delete/{id}', [ExperienceController::class, 'deleteExperience'])->name('delete.experience')->middleware('auth');
    });
 });

Route::prefix('portfolio')->group(function () {
    Route::get('', [PortfolioController::class, 'getData'])->name('show.portfolio');
    Route::get('create', [PortfolioController::class, 'showCreateFormPort'])->name('show.createPort');
    Route::post('create', [PortfolioController::class, 'createPortfolio'])->name('create.portfolio');
    Route::get('edit/{id}', [PortfolioController::class, 'editPortfolio'])->name('edit.portfolio');
    Route::post('update/{id}', [PortfolioController::class, 'updatePortfolio'])->name('update.portfolio');
    Route::get('delete/{id}', [PortfolioController::class, 'deletePortfolio'])->name('delete.portfolio');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


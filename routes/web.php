<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisaController;
use App\Mail\InviteUserMail;
use Illuminate\Support\Facades\Mail;
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

    Route::get('/', function () {
      return view('welcome');
    });

    Route::get('/dashboard', function () {
      return view('dashboard');
    })->name('dashboard');
    Route::get('visa/index', [ VisaController::class,'createBasicStep'])->name('visa.create.step');
    Route::post('visa/create-basic-step', [ VisaController::class,'postCreateBasicStep'])->name('visa.create.step.post');
    Route::get('visa/create-step-one', [ VisaController::class,'createStepOne'])->name('visa.create.step.one');
    Route::post('visa/create-step-one', [ VisaController::class,'postCreateStepOne'])->name('visa.create.step.one.post');
      
    Route::get('visa/create-step-two', [ VisaController::class,'createStepTwo'])->name('visa.create.step.two');
    Route::post('visa/create-step-two',[ VisaController::class,'postCreateStepTwo'])->name('visa.create.step.two.post');
      
    Route::get('visa/create-step-three', [ VisaController::class,'createStepThree'])->name('visa.create.step.three');
    Route::post('visa/create-step-three', [ VisaController::class,'postCreateStepThree'])->name('visa.create.step.three.post');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::get('/send-email', function () {
      Mail::to('eng.maya.esmaeel1@gmail.com')->send(new InviteUserMail());
      return response('Sending');
    })->middleware(['auth','admincheck']);
      Route::get('/users' , [AdminController::class ,'userInfo'])->middleware(['auth','admincheck'])
      ->name('users.info');
    

require __DIR__.'/auth.php';

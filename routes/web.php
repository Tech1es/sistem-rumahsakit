<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', [PatientController::class, 'index'])->name('patients.index');

Route::resource('patients', PatientController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\LogRequestActivity;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([LogRequestActivity::class])->group(function () {
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
});
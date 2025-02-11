<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DepartmentStructureController;

// Language switcher route
// Route::post('/switch-language', [LanguageController::class, 'switch'])
//     ->name('language.switch')
//     ->withoutMiddleware(['web']);
Route::post('/switch-language', [LanguageController::class, 'switch'])
    ->name('language.switch');
    // ->withoutMiddleware(['web']);

// Existing routes
Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'news'])->name('news.index');
Route::get('/news/refresh', [NewsController::class, 'refresh'])->name('news.refresh');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/department-structure', [DepartmentStructureController::class, 'index'])->name('department.structure');

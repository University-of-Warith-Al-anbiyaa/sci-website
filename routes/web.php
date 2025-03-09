<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\clc_planController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DepartmentStructureController;
use App\Http\Controllers\PlagiarismController;
use App\Http\Controllers\ContactController;

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
Route::get('/department-vision', [DepartmentStructureController::class, 'department_vision'])->name('department_vision');
Route::get('/department-mission', [DepartmentStructureController::class, 'vision_section'])->name('department_mission');
Route::get('/department-goals', [DepartmentStructureController::class, 'about_department'])->name('department_goals');

// clc-annual-plan route

Route::get('/clc-annual-plan', [clc_planController::class, 'index'])->name('clc_annual_plan.index');
Route::get('/archive', [clc_planController::class, 'archive'])->name('archive');
Route::get('/program', [clc_planController::class, 'program'])->name('program');

Route::get('create', [clc_planController::class, 'create'])
    ->name('create');
Route::post('/clc-annual-plan', [clc_planController::class, 'store'])
    ->name('clc_annual_plan.store');

// Plagiarism routes
Route::get('/plagiarism', [PlagiarismController::class, 'index'])->name('plagiarism.index');
Route::post('/plagiarism', [PlagiarismController::class, 'store'])->name('plagiarism.store');

// Certificate routes
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.index');
Route::post('/certificates/search', [CertificateController::class, 'search'])->name('certificates.search');
Route::get('/certificates/download/{id}', [CertificateController::class, 'downloadCertificate'])->name('certificates.download');
Route::get('/certificates/order/{id}', [CertificateController::class, 'downloadOrder'])->name('certificates.order');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

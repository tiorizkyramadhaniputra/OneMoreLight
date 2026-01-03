<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\SettingController;

// Public Routes
Route::get('/', function () {
    return view('public.home');
});

// Admin Auth Routes
Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login');

Route::post('/admin/login', function () {
    // TODO: Implement login logic
    return redirect()->route('admin.dashboard');
})->name('admin.login.post');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // CMS Routes
    Route::resource('slides', SlideController::class);
    Route::resource('products', ProductController::class);
    Route::resource('management', ManagementController::class);
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    
    // Table Demo
    Route::get('/table', function () {
        return view('admin.pages.table');
    })->name('table');
    
    // DataTable Demo
    Route::get('/datatable', function () {
        return view('admin.pages.datatable');
    })->name('datatable');
    
    // File Uploader Demo
    Route::get('/file-uploader', function () {
        return view('admin.pages.file-uploader');
    })->name('file-uploader');
    
    // Form Input Demo
    Route::get('/form-input', function () {
        return view('admin.pages.form-input');
    })->name('form-input');
});

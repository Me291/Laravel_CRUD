<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FileUploadController;

// Welcome page route
Route::get('/', function () {
    return view('welcome');
});

// Routes for Mahasiswa
Route::get('/form-pendaftaran/{locale?}', [MahasiswaController::class, 'formPendaftaran']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);
Route::resource('mahasiswas', MahasiswaController::class);

Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);  // GET route for file upload form
Route::post('/file-upload-rename', [FileUploadController::class, 'prosesFileUploadRename']);  // POST route to handle file upload and rename
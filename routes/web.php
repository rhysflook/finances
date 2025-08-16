<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download/private/file/{file_name}', function ($file_name) {
    // Logic to handle file download
    // Ensure the file exists and is accessible
    $path = storage_path('app/private/' . $file_name);
    
    if (!file_exists($path)) {
        abort(404, 'File not found.');
    }

    return response()->download($path);
})->name('download.private.file');
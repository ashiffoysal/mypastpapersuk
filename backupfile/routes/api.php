<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-gcseedexcel-math', [App\Http\Controllers\Api\GetPaperController::class, 'GcseEdexcelmath']);
Route::get('/get-alevel-subject', [App\Http\Controllers\Api\GetPaperController::class, 'AlevelSubject']);



Route::get('/get-gcseedexcel-all', [App\Http\Controllers\Api\GetPaperController::class, 'allGcse']);

Route::get('/get-igcseedexcel-all', [App\Http\Controllers\Api\GetPaperController::class, 'allIGcse']);


Route::get('/get-alevel-all', [App\Http\Controllers\Api\GetPaperController::class, 'allAlevel']);

Route::get('/get-aslevel-all', [App\Http\Controllers\Api\GetPaperController::class, 'allAslevel']);


Route::get('/home-blog', [App\Http\Controllers\Api\BlogController::class, 'homeBlog']);
Route::get('/blog-all', [App\Http\Controllers\Api\BlogController::class, 'Allblog']);

Route::get('/blog-details/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetails']);

Route::post('/contact-message', [App\Http\Controllers\Api\ContactMessageController::class, 'store']);





// DB_DATABASE=pastpaper-353033375dc8
// DB_USERNAME=pastpaper-353033375dc8
// DB_PASSWORD=qle2ruwioa
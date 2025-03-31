<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name("page1");
Route::get("/", [PageController::class, 'index']);
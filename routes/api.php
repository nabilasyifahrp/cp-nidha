<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
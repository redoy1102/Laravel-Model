<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;


Route::get('/',[AllController::class,'showAll']);

Route::get('/insert',[AllController::class,'insert']);

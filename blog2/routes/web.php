<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;



route::get('/',[App\Http\Controllers\siteController::class,'showHome']);
route::get('/About',[App\Http\Controllers\siteController::class,'showAbout']);
route::get('/Service',[App\Http\Controllers\siteController::class,'showService']);
route::get('/Portfolio',[App\Http\Controllers\siteController::class,'showPortfolio']);





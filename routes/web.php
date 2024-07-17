<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webcontroller;
Route::get('/home',[webcontroller::class, 'homefunc']);

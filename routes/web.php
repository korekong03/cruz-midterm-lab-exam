<?php

use App\Http\Controllers\user;
use App\Http\Controllers\post;
use App\Http\Controllers\comment;
use Illuminate\Support\Facades\Route;

Route::resource('user', Users::class);
Route::resource('posts', post::class);
Route::resource('comments', comment::class);
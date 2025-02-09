<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
}) -> name('beranda');

Route::get('/profiledesa', function () {
    return view('pages.profiledesa');
}) -> name('profiledesa');

Route::get('/infografis', function () {
    return view('pages.infografis');
}) -> name('infografis');

Route::get('/potensidesa', function () {
    return view('pages.potensidesa');
}) -> name('potensidesa');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

URL::forceScheme('http');

Route::get('/todos', function () {
    return view('todos');
});
Route::get('/schedule', function () {
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('events-feed/', function () {
    return 
        '[
    
            {
              "title": "CSE4500 Class",
              "start": "2022-02-23T17:30:00",
              "end": "2022-02-23T18:45:00"
            },
            {
              "title": "CSE4500 Class",
              "start": "2022-02-28T17:30:00",
              "end": "2022-02-28T18:45:00"
            }   
        ]';
});

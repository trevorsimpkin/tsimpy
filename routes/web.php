<?php

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
Route::get('/projects/gameoflife', function () {
    return view('projects.gameoflife');
});
Route::get('/projects/nqueens', function () {
    return view('projects.nqueens');
});
Route::get('/projects/dwa', function () {
    return view('projects.dwa');
});
Route::get('/projects/ugresearch', function () {
    return view('projects.ugresearch');
});
Route::get('/projects/kwd', function () {
    return view('projects.kwd');
});
Route::get('/projects/cityrocks', function () {
    return view('projects.cityrocks');
});
Route::get('/projects/pcp', function () {
    return view('projects.pcp');
});
Route::get('/projects/pca', function () {
    return view('projects.pca');
});

<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

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
//    return view('app');
    return Inertia::render('Home', [
        'name' => 'Rogerio Benevento',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia',
        ],
    ]);
});

Route::get('/users', function() {
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
    ]);
});

Route::get('/settings', function() {
    return Inertia::render('Settings');
});

Route::post('/logout', function() {
    dd('logging the user out', request('foo'));
});


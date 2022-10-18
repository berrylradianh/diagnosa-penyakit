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
    return view('home');
}) -> name('home');

Route::get('login', function () {
    return view('auth.login');
}) -> name('login');

Route::get('register', function () {
    return view('auth.register');
}) -> name('register');

Route::get('penyakit', function () {
    return view('pages.penyakit');
}) -> name('penyakit');

Route::get('gejala', function () {
    return view('pages.gejala');
}) -> name('gejala');

Route::get('penyakit-detail', function () {
    return view('pages.penyakit-detail');
}) -> name('penyakit-detail');

Route::get('dashboard-admin', function () {
    return view('pages.admin.dashboard');
}) -> name('dashboard-admin');

Route::get('users-admin', function () {
    return view('pages.admin.users');
}) -> name('users-admin');

Route::get('penyakit-admin', function () {
    return view('pages.admin.penyakit');
}) -> name('penyakit-admin');

Route::get('gejala-admin', function () {
    return view('pages.admin.gejala');
}) -> name('gejala-admin');

Route::get('hasil-admin', function () {
    return view('pages.admin.hasil');
}) -> name('hasil-admin');

<?php

use App\Http\Controllers\admin\GejalaAdminController;
use App\Http\Controllers\admin\RuleAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
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
})->name('home');

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.login');

Route::post('register', [AuthController::class, 'register'])->name('register.register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('penyakit', [PenyakitController::class, 'index'])->name('penyakit');
// Route::get('penyakit', function () {
//     return view('pages.penyakit');
// })->name('penyakit');
Route::get('penyakit/{penyakits}', [PenyakitController::class, 'show'])->name('penyakit-detail');
Route::get('gejala', [GejalaController::class, 'index'])->name('gejala');
// Route::get('gejala', function () {
//     return view('pages.gejala');
// })->name('gejala');

// Route::get('penyakit-detail', function () {
//     return view('pages.penyakit-detail');
// })->name('penyakit-detail');

Route::get('diagnosa', function () {
    return view('pages.diagnosa');
})->name('diagnosa');

Route::get('dashboard-admin', function () {
    return view('pages.admin.dashboard', [
        'title' => 'Dashboard | Diagnosa Penyakit'
    ]);
})->name('dashboard-admin');

Route::get('users-admin', function () {
    return view('pages.admin.users', [
        'title' => 'Users | Diagnosa Penyakit'
    ]);
})->name('users-admin');

Route::get('penyakit-admin', function () {
    return view('pages.admin.penyakit', [
        'title' => 'Penyakit | Diagnosa Penyakit'
    ]);
})->name('penyakit-admin');

Route::get('gejala-admin', [GejalaAdminController::class, 'index'])->name('gejala-admin');
// Route::get('gejala-admin', function () {
//     return view('pages.admin.gejala', [
//         'title' => 'Gejala | Diagnosa Penyakit'
//     ]);
// })->name('gejala-admin');

Route::get('hasil-admin', function () {
    return view('pages.admin.hasil', [
        'title' => 'Hasil | Diagnosa Penyakit'
    ]);
})->name('hasil-admin');

Route::get('rule-admin', [RuleAdminController::class, 'index'])->name('rule-admin');
// Route::get('rule-admin', function () {
//     return view('pages.admin.rule', [
//         'title' => 'Rule | Diagnosa Penyakit'
//     ]);
// })->name('rule-admin');

Route::get('dashboard-user', function () {
    return view('pages.user.dashboard', [
        'title' => 'Dashboard | Diagnosa Penyakit'
    ]);
})->name('dashboard-user');

Route::get('users-user', function () {
    return view('pages.user.users', [
        'title' => 'Users | Diagnosa Penyakit'
    ]);
})->name('users-user');

Route::get('penyakit-user', function () {
    return view('pages.user.penyakit', [
        'title' => 'Penyakit | Diagnosa Penyakit'
    ]);
})->name('penyakit-user');

Route::get('gejala-user', function () {
    return view('pages.user.gejala', [
        'title' => 'Gejala | Diagnosa Penyakit'
    ]);
})->name('gejala-user');

Route::get('hasil-user', function () {
    return view('pages.user.hasil', [
        'title' => 'Hasil | Diagnosa Penyakit'
    ]);
})->name('hasil-user');

Route::get('create-penyakit', function () {
    return view('pages.admin.create-penyakit', [
        'title' => 'Penyakit | Diagnosa Penyakit'
    ]);
});

Route::get('view-penyakit', function () {
    return view('pages.admin.view-penyakit', [
        'title' => 'Penyakit | Diagnosa Penyakit'
    ]);
});

Route::get('create-gejala', function () {
    return view('pages.admin.create-gejala', [
        'title' => 'Gejala | Diagnosa Penyakit'
    ]);
});

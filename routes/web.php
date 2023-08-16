<?php

use App\Http\Controllers\Auth\UserController;
use App\Mail\ConnecteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard.client.clients');
});

Route::get('/mail', function () {
    // Mail::to('orpheetohou16@gmail.com')->send(new ConnecteMail());
    // return view('dashboard.clients');
});
// Route::get('/utilisateurs', function () {
//     return view('dashboard.user');
// });

Route::get('/utilisateurs', [UserController::class, 'index'])->name('user.index');
Route::post('/utilisateurs', [UserController::class, 'store'])->name('user.store');
Route::post('/utilisateurs/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/utilisateurs/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');


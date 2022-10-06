<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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



Route::get('/card', [MailController::class, 'viewcard'])->name('cardview');
Route::get('/send', [MailController::class, 'sendcard'])->name('cardsend');
Route::get('/sendfile', [MailController::class, 'sendfile'])->name('sendfile');
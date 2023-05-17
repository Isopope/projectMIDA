<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});
Route::get('/RedirigerVers',[HomeController::class,'RedirigerVers']);

Route::get('/dashboard', function () {
    $auth_user=Auth::User()->name;
    return view('dashboard',compact('auth_user'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

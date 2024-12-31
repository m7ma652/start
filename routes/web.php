<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
route::get('/test', [TestController::class, 'index']);

route::get('/print/{name?}', [TestController::class, 'print'])->name('printName');
// Route::view('/testt','test');
// Route::redirect('/here', 'https://www.google.com/xhtml/search');

// Route groups
// Route::controller(TestController::class)->group(function () {
//     route::get('/test', 'index');
//     route::get('/print/{name?}', 'print')->name('printName');
// });
route::get('/hello',[UserController::class,'hello']);

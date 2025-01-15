<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIfNameIsAhmed;
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

// Route::get('/', function () {
//     // $data = ['1', '2', '3'];
//     $data = '<h1> Mohamed Ramadan </h1>';
//     return view('posts.index', compact('data'));
// });
// route::get('/test', [TestController::class, 'index']);
// route::get('/testt', [TestController::class, 'index']);
// route::get('/print/{name?}', [TestController::class, 'print'])->name('printName');
// Route::view('/testt','test');
// Route::redirect('/here', 'https://www.google.com/xhtml/search');

// Route groups
// Route::controller(TestController::class)->name('test')->middleware('check_ahmed')->group(function () {
//     route::get('/test', 'index');
//     route::get('/print/{name?}', 'print')->name('printName');
// });
// route::get('/hello', [UserController::class, 'hello']);
// route::get('/hello',SingleController::class);

// route::resource('posts', PostController::class);

// Theme URI
Route::controller(ThemeController::class)->group( function(){
    Route::get('/about', 'about')->name('theme.about');
    Route::get('/services', 'services')->name('theme.services');
    Route::get('/contact', 'contact')->name('theme.contact');
    Route::post('/contact/store', 'store')->name('theme.contact.store');
});

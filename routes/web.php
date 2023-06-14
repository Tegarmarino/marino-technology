<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Auth;
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
//     return view('main.userView');
// });

Route::get('/product', function () {
    return view('main.product.index');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [ProjectsController::class, 'index'])->name('admin.home')->middleware('is_admin');


Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

// Contact Controller
// Route::view('/contact', 'contactForm')->name('contactForm');
Route::post('/send',[ContactController::class, 'send'])->name('send.email');

// Route::resource('product', ProjectsController::class);

Route::resource('product', ProjectsController::class)->parameters([
    'product' => 'projects' // Ganti 'product' dengan 'projects'
]);

Route::get('/', [ProjectsController::class, 'indexProject'])->name('product.project');

// Route::resource('product', ProjectsController::class)->except(['update']);
// Route::post('product/{product}/update', [ProjectsController::class, 'update'])->name('product.update');
// Route::put('/projects/{id}', 'ProjectController@update')->name('projects.update');

Route::resource('product', ProjectsController::class);




Route::prefix('posts')->group(function () {
    Route::get('index', [PostsController::class, 'index']);
    Route::post('store', [PostsController::class, 'store']);
    Route::post('edit', [PostsController::class, 'edit']);
    Route::delete('destroy', [PostsController::class, 'destroy']);
});


// Route::prefix('posts')->group(function () {
//     Route::get('/', [PostsController::class, 'indexProject']);
// });

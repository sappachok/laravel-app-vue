<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use Illuminate\Foundation\Application;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    
});

Route::get('/example/one', [ExampleController::class, 'one'])->name('example.one');

Route::get('/example/one-two', [ExampleController::class, 'one_two'])->name('example.one_two');
Route::get('/example/two', [ExampleController::class, 'two'])->name('example.two');
Route::get('/example/three', [ExampleController::class, 'three'])->name('example.three');
Route::get('/example/four', [ExampleController::class, 'four'])->name('example.four');

Route::get('/example/five', [ExampleController::class, 'five'])->name('example.five');
Route::get('/example/six', [ExampleController::class, 'six'])->name('example.six');

Route::get('/example/seven', [ExampleController::class, 'seven'])->name('example.seven');

require __DIR__.'/auth.php';

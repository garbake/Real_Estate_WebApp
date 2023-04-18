<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;
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

Route::get('/', HomeController::class);
Route::prefix('/favorites')->group(function () {
    Route::get('/',[FavoriteController::class, 'index']); 
});

    


Route::prefix('/property')->group(function () {
    Route::get('/', [PropertyController::class, 'index']);
    Route::get('/{id}', [PropertyController::class, 'show'])->name('property.show');
    Route::get('/create', [PropertyController::class, 'create']);
    Route::post('/', [PropertyController::class, 'store'])->name('property.store');

});


Route::prefix('/user')->group(function () {
    //GET
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);  //GET Specific User

    //POST
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']); 

    //PUT OR PATCH
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::patch('/{id}', [UserController::class, 'update']); 

    //DELETE
    Route::delete('/{id}', [UserController::class, 'destroy']); 
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 
});

require __DIR__.'/auth.php';

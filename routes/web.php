<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::prefix('/property')->group(function () {
    Route::get('/', [PropertyController::class, 'index'])->name('property.index');

    Route::get('/create', [PropertyController::class, 'create'])->name('property.create');
    Route::get('/{id}', [PropertyController::class, 'show'])->name('property.show');

    
    Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('property.edit');
    
    
    
    Route::post('/', [PropertyController::class, 'store'])->name('property.store');

});


Route::prefix('/user')->group(function () {
    //GET
    Route::get('/', [UserController::class, 'index'])->name('user.index');
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


Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    
    Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('property.edit');
    Route::patch('/{id}', [PropertyController::class, 'update'])->name('property.update');

    Route::delete('/{id}', [PropertyController::class, 'destroy'])->name('property.destroy'); 
    
    //user
    Route::get('/user', [UserController::class, 'index'])->name('dashboard.user');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    Route::patch('user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');; 

    //import export

    Route::get('/users-export', [UserController::class, 'export'])->name('users.export');
    Route::post('/users-import', [UserController::class,'import'])->name('users.import');
    
   
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/favorites', 'FavoriteController@index')->name('favorites');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 
});

require __DIR__.'/auth.php';

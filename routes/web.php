<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User;
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

Route::get('/', HomeController::class);


Route::prefix('user')->group(function () {
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



//When a request is made to one of these registered routes, Laravel's router will automatically determine which method on the UserController class to call based on the HTTP verb (GET, POST, PUT, DELETE, etc.) and the URL parameters.
//Route::resource('user', UserController::class);


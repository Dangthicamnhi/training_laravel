<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('auth.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('auth.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('auth.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('auth.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('auth.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('auth.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('auth.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('auth.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});
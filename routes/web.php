<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CurseController;

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

/* Route::controller(CurseController::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
}); */

Route::get('cursos', [CurseController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CurseController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CurseController::class, 'store' ])->name('cursos.store');

Route::get('cursos{curse}', [CurseController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curse}/edit', [CurseController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curse}', [CurseController::class, 'update'])->name('cursos.update');


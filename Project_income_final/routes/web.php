<?php

use App\Http\Controllers\AdminController;
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
    return view('index');
});
Route::get('forms', function () {
    return view('forms');
});
Route::get('tables', function () {
    return view('tables');
});

Route::get('tables', [AdminController::class, 'pullData']);
//ลบข้อมูล 
Route::get('delete/{id}', [AdminController::class, 'deleteData'])->name('delete');
Route::get('edit/{id}', [AdminController::class, 'editData'])->name('edit');
Route::post('updateData/{id}', [AdminController::class, 'updateData'])->name('updateData');
//เพิ่มข้อมูล
Route::post('saveData', [AdminController::class, 'saveData'])->name('saveData');
//กราฟ
Route::get('/', [AdminController::class, 'showChart'])->name('index');

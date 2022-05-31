<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::resource('admin',EmployeeController::class);

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
Route::get('/', [EmployeeController::class, 'index']);
// Route::get('/', function () {
//     return view('admin/index');
// });
Route::get('/edit', [EmployeeController::class, 'show_editpage']);
// Route::get('/edit', function () {
//     return view('admin/edit');
// });


Route::get('/salary', function () {
    return view('admin/salary');
});
Route::get('/frm_edit', function () {
    return view('admin/frm_edit');
});
Route::get('/frm_add', function () {
    return view('admin/frm_add');
});
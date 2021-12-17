<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('khoa', 'KhoaController@index');
Route::get('nganh', 'NganhController@index');
Route::get('lop', 'LopController@index');
Route::get('sinhvien', 'SinhVienController@index');

Route::post('admin/login', 'AdminController@login');
Route::post('lop/sinhvien', 'SinhVienController@getStudentsByClassId');

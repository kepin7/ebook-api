<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});
Route::get('coba', function(){
    return "haloo";
});
// Array
Route::get('coba1', function(){
    return ['alu', 'nana', 'balmond'];
});
//json objek
Route::get('coba2', function(){
    return [
        'nama' => 'hizkia kevin',
        'kelas' => 'XII RPL 4',
        'nis' => 3103120108
    ];
});
//objek json, ubah status code
Route::get('coba3', function(){
    return response()->json(
        [
            'nama' => 'hizkia kevin',
            'kelas' => 'XII RPL 4',
            'nis' => 3103120108
        ], 201
    );
});
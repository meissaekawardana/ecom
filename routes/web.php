<?php

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

Route::get('/anggota', 'WebController@index');


Route::get('/admin', 'AdminController@index');


// Route::get('/r', function () {
//     $data=App\Anggota::all();
//     foreach ($data as $tabel) {
//     	echo $tabel->nama.' '.$tabel->alamat.' Punya Hobi: ';
//     	foreach ($tabel->panggilDataHobi as $list) {
//     	echo $list->hobi.'<br>';
//     	}
//     }
// });





<?php

use App\Http\Controllers\ProductsController;
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


//Demo
Route::get('/products', [
    ProductsController::class,
    'index'
]);

// Tuan1

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/trangchu', function () {
//     return view('trangchu');
// });
// Route::get('/gioithieu', function () {
//     return view('gioithieu');
// });
// Route::get('/sanpham', function () {
//     return view('sanpham');
// });
// Route::get('/lienhe', function () {
//     return view('lienhe');
// });
// Route::get('/ban', function () {
//     return view('ban');
// });
// Route::get('/ghe', function () {
//     return view('ghe');
// });


// Tuan2

// Demo =================================================================================

// Route::get('/demo/{name}', function ($name){
//     return 'Xin chào ' . $name;
// })->where('name','[a-z]+');

// Route::get('/demo2/{name?}', function ($name="admin"){
//     return 'Xin chào '. $name;
// })->where('id', '[0-9]{2}');

// EXE =================================================================================
// EXE 1
Route::get('/{name}', function ($name){
    return view($name);
});

//---------------
//EXE 2
Route::get('/user/{id}/profile', function ($id){

    
})->name('profile');



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

//設定 Route 回傳 view
Route::get('/', function () {
    return view('welcome');
});

//設定 Route 回傳字串
Route::get('/', function() {
    return 'welcome';
});

//設定 Route 跳轉路由
Route::get('r1', function(){
    return redirect('r2');
});

Route::get('r2', function(){
    return view('welcome');
});

//修改 Route 接受參數
/*
Route::get('hello/{name}', function($name){
    return 'Hello, '.$name;
});
Route::get('hello/{name?}', function($name = 'Everybody'){
    return 'Hello, '.$name;
});
*/

//增加新的 Route
/*
Route::get('hello/{name}', function($name){
    return 'Hello, '.$name.'. Nice to meet you!';
});
*/

//將 Route 取名為 hello.index
Route::get('hello/{name?}', function($name = 'Everybody'){
    return 'Hello, '.$name;
})-> name('hello.index');


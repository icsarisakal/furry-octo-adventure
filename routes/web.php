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

Auth::routes();
Route::get('wiki',function (){
    return view('main.wiki');
})->name('main.wiki');
Route::get('welcome',function (){
    return view('welcome');
})->name('welcome');
//Route::get('blog',function (){
//    $blog = \Illuminate\Support\Facades\DB::table('news')->get();
//    $blog = $blog->first();
//    return view('main.blog',compact('blog'));
//})->name('main.blog');
Route::get('prevent',function (){
    return view('main.prevent');
})->name('main.prevent');
Route::get('insert',function (){
    return view('main.admin.insert');
})->name('admin.insert');
Route::get('panel',function (){
    return view('main.admin.panel');
});
Route::get('create',function (){
    return view('main.admin.create');
});
Route::get('covid', 'MainController@index')->name('home');
Route::get('news', 'MainController@news')->name('main.news');
Route::get('country', 'MainController@map')->name('main.country');
Route::post('login','MainController@login')->name('login');


Route::resource('post', PostController::class);

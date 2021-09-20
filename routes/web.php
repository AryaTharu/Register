<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;

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

//Route::get('/multiplication/{first}/{second}',function($firstno,$secondno){
//    return view('demo',['firstno' => $firstno,'secondno'=>$secondno]);
//});
//
//Route::get('/replace/{first}/{second}', function ($first, $second) {
//    $sentence = 'hello world with hello everywhere hello!';
//    $replacedSentence = str_replace($first,$second, $sentence);
//    return view('example', compact('sentence', 'replacedSentence'));
//
//});
//    Route::get('/sum',[\App\Http\Controllers\FormController::class,'sum'])->name('sum-of-numbers');
//    Route::post('/sum',[\App\Http\Controllers\FormController::class,'sum'])->name('sum-of-numbers');
//
//
//    Route::get('/form1',[\App\Http\Controllers\FormController::class,'show'])->name('show-form-data');
//    Route::post('/form-post-request',[\App\Http\Controllers\FormController::class,'show'])->name('show-form-data');
//
//    Route::resource('/resources',ResourceController::class)->names([
//        'create'=>'resources.build',
//        'edit' =>'resources.change',
//        'index'=>'resources.list',
//        'show'=>'resources.view'
//    ]);

//Route::get('/form', [FormController::class, 'create'])->name('get-form');
//Route::post('/sum', [FormController::class, 'sum'])->name('sum-of-numbers');

Route::resource('registers', \App\Http\Controllers\RegisterController::class,);

Route::get('/registers',[\App\Http\Controllers\RegisterController::class,'index']);
Route::get('/registers/create',[\App\Http\Controllers\RegisterController::class,'create']);
Route::post('/registers',[\App\Http\Controllers\RegisterController::class,'store']);
Route::get('/registers/{id}',[\App\Http\Controllers\RegisterController::class,'show']);
Route::get('/registers/{id}/edit',[\App\Http\Controllers\RegisterController::class,'show']);

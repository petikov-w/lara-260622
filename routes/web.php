<?php

use Illuminate\Support\Facades\Route;
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

Route::get('hello', function () {
    return view('pages.hello');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('articles', function () {
    $articles = [
        [
            'id'=>1,
            'title'=>'Пост 1'
        ],
        [
            'id'=>2,
            'title'=>'Пост 2'
        ],
        [
            'id'=>3,
            'title'=>'Пост 3']
    ];
    return view('pages.articles')->with('articles',$articles);
});

Route::get('articles/{article}', function ($article, Request $request) {
    return view('pages.articles');
});

//Route::get ('hello', function (){
//    return '<h1>Приветик!!!</h1>';
//});

//Route::get ('about', function (){
//    return '<h1>Расскажу немного о себе!!!</h1>';
//});
//
//Route::get ('articles', function (){
////    dd($request);
//    return "<h1>Статьи</h1>";
//});

//Route::get ('articles/{article}', function ($article, Request $request){
////    dd($request);
//    return "<h1 style='color: {$request->get('color')}'>Статья $article</h1>";
//});

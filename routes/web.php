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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    // 测试使用Article Model
//    $article = \App\Article::find(2);

//    $article = \App\Article::where('title','我是标题')->first();

//    $articles = \App\Article::all();
//    foreach ($articles as $artile){
//        echo $artile->title;
//    }

//    $articles = \App\Article::where('id','>',3)->where('id','<','5')->get();
//    foreach($articles as $article){
//        echo $article->title;
//    }

//    $articles = \App\Article::where('id', '>', 3)->where('id', '<', 5)->orderBy('updated_at', 'desc')->get();
//    foreach ($articles as $article) {
//        echo $article->title;
//    }
//    return json_encode($articles);
    return date('Y-m-d H:i:s');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
//    Route::get('article', 'ArticleController@index');
    Route::resource('articles','ArticleController');
});

Route::get('article/{id}','ArticleController@show');
Route::post('comment', 'CommentController@store');




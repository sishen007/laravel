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


Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index');
//    Route::get('article', 'ArticleController@index');
    Route::resource('articles', 'ArticleController');
});

Route::get('article/{id}', 'ArticleController@show');
Route::post('comment', 'CommentController@store');

Route::get('test', 'TestController@index');//->middleware('token');
Route::get('test/test', 'TestController@test');
Route::get('test/helperFunc', 'TestController@helperFunc');

/**
 * 文章相关
 */
Route::get('/posts','PostController@index'); // 列表页

Route::get('/posts/create','PostController@create'); // 创建文章
Route::post('/posts','PostController@store'); // 创建文章
Route::get('/posts/{post}','PostController@show'); // 文章详情
Route::get('/posts/{post}/edit','PostController@edit'); // 编辑文章
Route::put('/posts/{post}','PostController@update'); // 更新文章
Route::get('/posts/{post}/delete','PostController@delete'); // 删除文章

Route::post('/posts/image/upload','PostController@imageUpload'); // 文本编辑器上传连接

/**
 * 用户相关
 */
Route::get('user/{id}','UserController@show');
//Route::get('user/{id}','ShowProfile'); 但动作控制器






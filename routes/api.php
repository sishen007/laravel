<?php

use Illuminate\Http\Request;

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
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * 隐式绑定 路由模型映射 users作为模型
 */
Route::get('users/{user}', function (App\User $user) {
    dd($user);
});
/**
 * 显式绑定 在RouteServiceProvider 中定义显示模型绑定
 */
Route::get('profile/{user_model}', function (App\User $user) {
    dd($user);
});


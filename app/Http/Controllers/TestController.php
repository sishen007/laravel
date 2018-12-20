<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \Illuminate\Support\Facades\Route;

class TestController extends Controller
{
    public function index(Request $request)
    {
        // 访问当前路由
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
        // 获取urlpath
        $path = $request->path();
        // 获取完整url
        $url = $request->url();
        $fullurl = $request->fullUrl();
        //获取请求的方法
        $method = $request->method();

        dd($method, $route, $name, $action, $path, $url, $fullurl);
        return "ok";
    }

    public function test(Request $request)
    {
//        if ($request->is('test/*')) {
//            dd(['path' => 'is test start']);
//        }
//        return [1,2,3];
//        return response('hello world',200)->header('Content-Type','text/plain');
        $content = 'Hello World!';
        return response($content)
            ->header('Content-Type', 'text/plain')
            ->header('X-Header-One', 'Header Value')
            ->header('X-Header-Two', 'Header Value')
            ->cookie('name_test', 'value', 1);

    }

    public function helperFunc()
    {
        $url = action('HomeController@index');
        return view('helperFunc',compact('url'));
    }
}

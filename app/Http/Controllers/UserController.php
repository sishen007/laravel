<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    public function __construct()
    {
//        $this->middleware('token');// 指定一个中间件给所有的方法
//        $this->middleware('token')->only(['show']);// 指定方法应用中间件
//        $this->middleware('token')->except(['show']);// 指定方法不应用中间件
//        $this->middleware(function ($request, $next) {
//            if (!is_numeric($request->input('id'))) {
//                throw new NotFoundHttpException();
//            }
//            return $next($request);
//        });
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;

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
        // 运行原生的SQL查询
//        $users = DB::select('select * from users where id= ? ',[1]);
//        $users = DB::select('select * from users where id = :id ',['id'=>1]);
//        $users = DB::insert('insert into users (name,email,password) values (?,?,?)',['学院君','xueyuanjun@xin.com','123456']);
//        $users = DB::table('users')->where('name', 'aW9jP3WlW4')->value('email');

//        dd($users);

        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }

}

<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * 在下一个执行之前执行
         */
        if($request->input('token') != 'laravelacademy.org'){
            return redirect()->to('http://laravelacademy.org');
        }
        return $next($request);
        /**
         * 当然也可以在其他中间件执行完毕后再执行
         */
    }
}

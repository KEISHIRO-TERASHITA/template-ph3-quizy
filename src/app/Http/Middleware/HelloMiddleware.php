<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = 'ミドルウェアより';
        $request->merge(['data'=>$data]);
        return $next($request);
        // コントローラ側で、$request->data という形で取り出せる
    }
}

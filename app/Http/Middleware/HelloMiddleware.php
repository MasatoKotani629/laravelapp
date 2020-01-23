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
        $data = [
            ['name' => 'taro', 'mail' => 'taro@yamada'],
            ['name' => 'taro1', 'mail' => 'taro1@yamada'],
            ['name' => 'taro2', 'mail' => 'taro2@yamada'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}

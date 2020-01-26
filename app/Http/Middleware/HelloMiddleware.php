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
    public function handle($request, Closure $next) {   

        //前処理
        // $data = [
        //     ['name' => 'taro', 'mail' => 'taro@yamada'],
        //     ['name' => 'taro1', 'mail' => 'taro1@yamada'],
        //     ['name' => 'taro2', 'mail' => 'taro2@yamada'],
        // ];
        // $request->merge(['data'=>$data]);
        // return $next($request);

        //後処理
        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);
        return $response;

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $data = [
            ['name' => 'taro', 'mail' => 'taro@yamada'],
            ['name' => 'hanako', 'mail' => 'hanako@flower'],
            ['name' => 'sachiko', 'mail' => 'sachiko@happy'],
        ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}

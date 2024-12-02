<?php

namespace App\Http\Middleware;

use App\Http\Controllers\HandlerController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListenPort
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $requestPort = $request->getPort();

        // Исключаем маршруты, на которые мы перенаправляем
        if ($request->route()?->getName() === 'handler.handle') {
            return $next($request);
        }

        // Перенаправление для портов, отличных от 3317
        if ($requestPort != 3317) {
            return redirect()->route('handler.handle');
        }

        return $next($request);

    }



}

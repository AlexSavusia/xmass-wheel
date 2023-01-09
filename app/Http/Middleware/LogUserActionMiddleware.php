<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

final class LogUserActionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('user action', [
          'url' => $request->fullUrl(),
          'ip' => $request->getClientIp()
        ]);

        return $next($request);
    }
}

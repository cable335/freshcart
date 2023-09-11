<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 剛創好middleware要去kernel註冊這隻middleware
        $user = $request->user();
        if ($user->user_role != 1) {
            return redirect(route('infomation'));
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleWeight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$weight): Response
    {
        // 一個?先判斷 有沒有 如果有 就往下判斷兩個? 如果有就沒事  假如在一個?判斷沒有 就跳 兩個?後的東西
        $userRole = $request->user()?->user_role ?? 0;

        // str_contains 判斷字串是否有包含     strval轉字串
        if (!str_contains($weight,strval($userRole))){

            // 如果使用者是1 跳轉 後端頁面
            if($userRole == '1'){
                return redirect(route('backend.index'));
            }
            // 不是就 跳轉使用者資訊頁
            return redirect(route('infomation'));
        }
        return $next($request);
    }
}

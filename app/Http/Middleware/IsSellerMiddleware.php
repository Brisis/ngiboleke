<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsSellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->is_seller || !auth()->user()->merchant->verified) {
          return redirect()->route('seller.unverified');
        }

        return $next($request);
    }
}

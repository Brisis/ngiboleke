<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsVerifiedMerchant
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
         $user = auth()->user();

         $verification = $user->verifications->where('purpose', 'Merchant Verification');

         if (!auth()->check() || !count($verification) >= 1) {
           abort(403);
         }

         return $next($request);
     }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\User;
use TCG\Voyager\Traits\VoyagerUser;

class order_access
{
    use VoyagerUser;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()&& User::where('id',Auth::user()->id)->where('role_id','!=', 1)->first()!=null) {
            return redirect()->route('voyager.dashboard')->with('error','You are restricted');
        }
        return $next($request);
    }
}

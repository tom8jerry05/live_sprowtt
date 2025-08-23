<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Role;

use Closure;
class CheckAdminRole
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

        if (auth()->user()->roleid == Role::$SUB_ADMIN ){
            return $next($request);
        }
        //Auth::logout();
        //return redirect('login')->with('error','Access Denied');
        abort(403);
    }
}

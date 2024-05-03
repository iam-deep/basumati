<?php

namespace App\Http\Middleware;

use Deep\FormTool\Core\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $msg = 'Please login to continue!';

        if (Session::has('user')) {
            $user = Session::get('user');

            if ($user) {
                return $next($request);
            }

            $msg = 'Your session has been expired!';
        }

        Session::pull('user');

        return redirect(config('form-tool.adminURL').'/login')->with('error', $msg);
    }
}

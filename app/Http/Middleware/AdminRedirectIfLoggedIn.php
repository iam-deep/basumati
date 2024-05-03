<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminRedirectIfLoggedIn
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
        if (Session::has('user')) {
            $user = Session::get('user');

            if ($user) {
                // $query = DB::table('users');

                // $metaColumns = \config('form-tool.table_meta_columns');
                // if (isset($metaColumns['deletedAt']) && \trim($metaColumns['deletedAt'])) {
                //     $query->whereNull($metaColumns['deletedAt']);
                // }

                // $user = $query->where('email', $user->email)->where('status', 1)->first();
                // if ($user && isset($user->adminLoginToken) && Hash::check($user->password.$user->email.$_SERVER['HTTP_USER_AGENT'], $user->adminLoginToken)) {
                //     $loginRedirect = config('form-tool.adminURL').config('form-tool.loginRedirect', '/dashboard');

                //     return redirect($loginRedirect);
                // }

                return redirect(config('form-tool.adminURL').'/dashboard');
            }
        }

        return $next($request);
    }
}

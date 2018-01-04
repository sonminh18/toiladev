<?php
/**
 * Created by PhpStorm.
 * User: Son Minh
 * Date: 11/8/2017
 * Time: 9:01 AM
 */
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use session;

class CheckUserSession
{

    public function handle($request, Closure $next)
    {
        $action = $request->route();
        if (!Auth::check()) {
            // user value cannot be found in session
            return redirect('/');
        }

        return $next($request);
    }

}

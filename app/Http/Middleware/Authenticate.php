<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            
            if(preg_match('/admin./', $_SERVER['HTTP_HOST']))
            {
                return route('admin.login');
            }

            if(preg_match('/portal./', $_SERVER['HTTP_HOST']))
            {
                return route('admin.login');
            }

            return route('login');
        }
    }
}

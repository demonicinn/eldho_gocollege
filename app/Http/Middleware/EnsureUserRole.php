<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Route;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentRouteName = Route::currentRouteName();
        $cRoute = trim($currentRouteName, "ab.");

        $routeArray = explode('.', $currentRouteName);
        //permission to show/details page
        if(isset($routeArray[2]) && $routeArray[2]=='show'){
            $cRoute = $routeArray[1];
        }

        $permissions = userPermissions();
        $roleAdmin = roleAdmin();

        if($permissions == $roleAdmin){
            return $next($request);
        }
        elseif(in_array($cRoute, $permissions))
        {
            return $next($request);
        }

        
        $request->session()->flash('error', "Invalid Request");
        return redirect()->route('ab'); 
    }
}

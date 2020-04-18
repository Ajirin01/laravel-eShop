<?php

namespace App\Http\Middleware;

use Closure;


class test_middleware
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
        if($request->age < 20){
            return redirect("login");
            // echo "middle ware testing";
           
        }
       
            return $next($request);
       
        
    }
}

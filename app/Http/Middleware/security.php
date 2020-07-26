<?php

namespace App\Http\Middleware;

use Closure;

class security
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
      $a=session()->get("rajesh");
      
      if($a!="rajesh"){
         return redirect("/");
      }
   

     
       
        return $next($request);
    }
}

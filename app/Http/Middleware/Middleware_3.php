<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class Middleware_3
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

                if($request->mw_3 && $request->mw_3>20)
{
echo("<h2 style='color:red;'><center>Welcome to the Routed Middleware you can access a single route or page</center></h2>");
}
 
        return $next($request);
    }
}

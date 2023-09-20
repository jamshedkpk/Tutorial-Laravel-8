<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class Middleware_2
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
        if($request->mw_2 && $request->mw_2>20)
{
echo("<h2 style='color:red;'><center>Welcome to the Group Middleware you can access to some pages</center></h2>");
}

        return $next($request);
    }
}

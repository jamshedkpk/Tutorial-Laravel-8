<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class Middleware_1
{
public function handle(Request $request, Closure $next)
{
if($request->mw_1 && $request->mw_1>20)
{
echo("<h2 style='color:red;'><center>Welcome to the Global Middleware you can access to all pages</center></h2>");
}
return $next($request);
}
}

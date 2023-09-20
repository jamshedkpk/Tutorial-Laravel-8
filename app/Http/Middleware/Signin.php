<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class Signin
{
public function handle(Request $request, Closure $next)
{
if(Session()->has('user'))
{
return redirect('controller30');
}
return $next($request);
}
}


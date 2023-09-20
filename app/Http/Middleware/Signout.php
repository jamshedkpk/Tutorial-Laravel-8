<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class Signout
{
public function handle(Request $request, Closure $next)
{
if(!Session()->has('user'))
{
return redirect('controller29');
}
return $next($request);
}
}

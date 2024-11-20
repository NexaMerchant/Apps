<?php
namespace NexaMerchant\Apps\Http\Middleware;
use Closure;
class Authenticate
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
        if (!auth()->guard('apps')->check()) {
            return redirect()->route('apps.login');
        }

        return $next($request);
    }
}

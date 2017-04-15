<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class InTheProcess
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
        $now = Carbon::now();

        // jeszcze nie rozpoczęty
        if (Carbon::parse(config('contest.begin'))->gte($now)) {
            return redirect()->route('home');
        }
        // konkurs zakończony
        if (Carbon::parse(config('contest.end'))->lt($now)) {
            return redirect()->route('rank');
        }

        return $next($request);
    }
}

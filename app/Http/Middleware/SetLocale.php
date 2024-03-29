<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);

        if (!$locale || ! in_array($locale, array_keys(config('app.available_locales')))) {
            $locale = config('app.fallback_locale');
        }
        app()->setLocale($locale);
        return $next($request);

    }
}

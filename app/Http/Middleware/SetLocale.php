<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        $availableLocales = ['uz', 'en', 'ru'];
        if (in_array($locale, $availableLocales)) {
            App::setLocale($locale);
        } else {
            // Default tilga yo'naltirish yoki boshqa harakat
            return redirect('uz'); // yoki app()->getLocale()
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Admin foydalanuvchisi uchun tekshiruv
        if (Auth::check() && Auth::user()->email === 'admin@example.com') {
            return $next($request); // Agar admin bo'lsa, davom etamiz
        }

        return redirect('/'); // Agar admin bo'lmasa, asosiy sahifaga qaytamiz
    }
}

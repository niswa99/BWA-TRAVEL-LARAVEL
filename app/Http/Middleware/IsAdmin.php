<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // kelas yang dipanggil;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->roles = 'ADMIN'){  //mengetahui apakah admin atau user
            return $next($request); //melanjutkan request yang sebelumnya
        }
        return redirect('/');
    }
}
// langkah selanjutnya mendaftarkan class IsAdmin di Kernel bagian Routemiddleware

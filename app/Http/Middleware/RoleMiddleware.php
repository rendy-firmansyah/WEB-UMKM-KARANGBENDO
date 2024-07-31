<?php // app/Http/Middleware/RoleMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string $role
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // if (!$request->user() || $request->user()->role !== $role) {
        //     abort(403, 'Unauthorized');
        // }
        // return $next($request);

        if (!Auth::check()) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect('/login');
        }

        // Ambil user yang sedang login
        $user = Auth::user();

        // Periksa apakah user memiliki peran yang sesuai
        if ($user->usertype !== $role) {
            // Jika tidak, redirect ke halaman home atau halaman lain yang sesuai
            return redirect('/');
        }

        // Jika sesuai, lanjutkan ke request berikutnya
        return $next($request);
    }
}

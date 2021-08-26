<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class authAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $currentRouteName=Route::currentRouteName();
        $userLevel=auth()->user()->level;
        if (in_array ($currentRouteName, $this->userAccessRole()[$userLevel])){
            return $next($request); 
        } else {
            abort (403,'Anda tidak diizinkan untuk mengakses halaman ini');
        }
    }
    private function userAccessRole()
    {
        return [
            'admin'=>[
                'home',
                'siswa',
                'siswaUser',
                'petugas',
                'kelas',
                'spp',
                'transaksi',
                'historyPembayaran',
                'laporan',
                'laporanPDF'
            ],
            'petugas'=>[
                'home',
                'transaksi',
                'historyPembayaran'
            ],
            'siswa'=>[
                'home',
                'historyPembayaran'
            ]
        ];
    }
}

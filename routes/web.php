<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\SiswaComponent;
use App\Http\Livewire\SiswaUserComponent;
use App\Http\Livewire\PetugasComponent;
use App\Http\Livewire\KelasComponent;
use App\Http\Livewire\SppComponent;
use App\Http\Livewire\TransaksiComponent;
use App\Http\Livewire\HistoryComponent;
use App\Http\Livewire\LaporanComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/',Home::class)->name('home');
    Route::get('/siswa',SiswaComponent::class)->name('siswa');
    Route::get('/siswaUser',SiswaUserComponent::class)->name('siswaUser');
    Route::get('/petugas',PetugasComponent::class)->name('petugas');
    Route::get('/kelas',KelasComponent::class)->name('kelas');
    Route::get('/spp',SppComponent::class)->name('spp');
    Route::get('/transaksi',TransaksiComponent::class)->name('transaksi');
    Route::get('/historyPembayaran',HistoryComponent::class)->name('historyPembayaran');
    Route::get('/laporan',LaporanComponent::class)->name('laporan');
    Route::get('/laporanPDF', [LaporanComponent::class, 'laporanPDF'])->name('laporanPDF');
});

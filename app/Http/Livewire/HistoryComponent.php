<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pembayaran;
use Livewire\Component;

class HistoryComponent extends Component
{   
    public $nisn;
    public $dataHistory=[];

    public function laporan()
    {
        $this->dataHistory=pembayaran::join('siswas', 'siswas.nisn', '=', 'pembayarans.nisn')
        ->join('spps', 'spps.id', '=', 'pembayarans.id_spp')
        ->join('kelas', 'kelas.id', '=', 'siswas.id_kelas')
        ->where('siswas.nisn', $this->nisn)
        ->get(['pembayarans.*', 'spps.*', 'kelas.*', 'siswas.*', 'pembayarans.created_at']);
    }
    public function render()
    {
        if (Auth::user()->level === 'admin' or Auth::user()->level === 'petugas')
        {
            $dataHistory=DB::table('pembayarans')
            ->join('siswas', 'siswas.nisn', '=', 'pembayarans.nisn')
            ->join('spps', 'spps.id', '=', 'pembayarans.id_spp')
            ->join('kelas', 'kelas.id', '=', 'siswas.id_kelas')
            ->get(['pembayarans.*', 'spps.*', 'kelas.*', 'siswas.*', 'pembayarans.created_at']);
            return view('livewire.history-component', ['history'=>$dataHistory])->layout('layouts.base');
        }
        elseif (Auth::user()->level === 'siswa')
        {
            return view('livewire.history-component')->layout('layouts.base');
        }
    }
    
}

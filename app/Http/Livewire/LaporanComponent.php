<?php

namespace App\Http\Livewire;

use App\Models\pembayaran;
use Livewire\Component;

class LaporanComponent extends Component
{

    public $nisn;
    public $dataPembayaran=[];

    public function laporan()
    {
        $this->dataPembayaran=pembayaran::join('siswas', 'siswas.nisn', '=', 'pembayarans.nisn')
        ->join('spps', 'spps.id', '=', 'pembayarans.id_spp')
        ->join('kelas', 'kelas.id', '=', 'siswas.id_kelas')
        ->where('siswas.nisn', $this->nisn)
        ->get(['pembayarans.*', 'spps.*', 'kelas.*', 'siswas.*']);
    }

    public function render()
    {
        return view('livewire.laporan-component')->layout('layouts.base');
    }
}
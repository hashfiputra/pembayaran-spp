<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\siswa;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;

class TransaksiComponent extends Component
{

    public $idPetugas,$idSPP,$spp, $tglBayar,$nisn,$tahun,$totalBayar;
    public $dataPembayaran;
    public $bulan=[];
    
    public function crSPP()
    { 
        $nisn=$this->nisn;
        $sppsiswa=siswa::join('spps', 'siswas.id_spp', '=', 'spps.id')
            ->where('siswas.nisn', $nisn)
            ->get(['siswas.*','spps.*'])
            ->first();
        $this->spp=$sppsiswa->nominal;
        $this->idSPP=$sppsiswa->id_spp;
    }
    
    public function simpan()
    {
        $this->totalBayar=(int)count($this->bulan) *(int) $this->spp;
        $this->dataPembayaran=[
            'id_petugas'=>Auth::user()->id,
            'nisn'=>$this->nisn,
            'bulan_dibayar'=>implode(", ",$this->bulan),
            'tahun_dibayar'=>$this->tahun,
            'id_spp'=>$this->idSPP,
            'jumlah_bayar'=>$this->totalBayar
        ];
        $this->dispatchBrowserEvent('openjumlahBayarModal');
    }
    
    public function simpanPembayaran()
    {
        pembayaran::create($this->dataPembayaran);
        session()->flash('message', 'Pembayaran berhasil');
        return redirect()->route('transaksi');
    }
    
    public function hitung()
    {
        $jumlahBayar=count($this->bulan) * $this->spp;
    }

    public function render()
    {
        return view('livewire.transaksi-component')->layout('layouts.base');
    }
}

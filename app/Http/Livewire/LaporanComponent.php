<?php

namespace App\Http\Livewire;

use App\Models\pembayaran;
use Livewire\Component;
use PDF;

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

    // Generate PDF
    public function laporanPDF() {
        // retreive all records from db
        $data = pembayaran::join('siswas', 'siswas.nisn', '=', 'pembayarans.nisn')
        ->join('spps', 'spps.id', '=', 'pembayarans.id_spp')
        ->join('kelas', 'kelas.id', '=', 'siswas.id_kelas')
        ->where('siswas.nisn', $this->nisn)
        ->get(['pembayarans.*', 'spps.*', 'kelas.*', 'siswas.*']);
  
        // share data to view
        view()->share('dataPembayaran',$data);
        $pdf = PDF::loadView('livewire.laporan-pdf', $data)->output()   ;
  
        // download PDF file with download method
        return response()->streamDownload(
            fn() => print($pdf), 'laporan-spp.pdf'
        );
      }

    public function render()
    {
        return view('livewire.laporan-component')->layout('layouts.base');
    }
}
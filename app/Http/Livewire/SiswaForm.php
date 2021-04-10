<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\spp;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SiswaForm extends Component
{

    public $nisn, $nis, $nama, $kelas, $alamat, $telepon, $spp, $idAction;
    public $idSpp=[];
    public $idKelas=[];
    protected $listeners=[ 'getModalId' ];
    
    public function mount()
    {
        $this->idSpp=spp::latest()->get();
        $this->idKelas=kelas::latest()->get();
    }
    
    public function getModalId($idUpdate)
    {
        $this->idAction=$idUpdate;
        $idsiswa=siswa::find($this->idAction);
        $this->nisn=$idsiswa->nisn;
        $this->nis=$idsiswa->nis;
        $this->nama=$idsiswa->nama;
        $this->kelas=$idsiswa->id_kelas; 
        $this->alamat=$idsiswa->alamat;
        $this->telepon=$idsiswa->no_tlp;
        $this->spp=$idsiswa->id_spp;
    }
    
    public function simpan()
    {
        $data=[
            'nisn'=>$this->nisn,
            'nis'=>$this->nis,
            'nama'=>$this->nama,
            'id_kelas'=>$this->kelas,
            'alamat'=>$this->alamat,
            'no_tlp'=>$this->telepon,
            'id_spp'=>$this->spp,
        ];
        
        $idData=['id'=>$this->idAction];
        
        $dataUpdateSiswa=siswa::where('id',$idData)->first();

        if( $dataUpdateSiswa == null){
            siswa::create($data);
            $this->resetVar($data);
        }else{
            siswa::find($idData)->first()->update($data);
        }
    }

    private function resetVar($data)
    {
        $this->nisn=null;
        $this->nis=null;
        $this->nama=null;
        $this->kelas=null;
        $this->alamat=null;
        $this->telepon=null;
        $this->spp=null;
    }

    public function render()
    {
        return view('livewire.siswa-form');
    }
}

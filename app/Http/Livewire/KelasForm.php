<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\kelas;

class KelasForm extends Component
{
    public $nama_kelas, $kompetensi_keahlian, $idAction;
    protected $listeners=['getModalId'];

    public function getModalId($idUpdate)
    {
        $this->idAction=$idUpdate;
        $idKelas=kelas::find($this->idAction);
        $this->nama_kelas=$idKelas->nama_kelas;
        $this->kompetensi_keahlian=$idKelas->kompetensi_keahlian;
    }

    public function simpan()
    {
        $data=[
            'nama_kelas'=>$this->nama_kelas,
            'kompetensi_keahlian'=>$this->kompetensi_keahlian
        ];

        $idData=['id'=>$this->idAction];

        $dataUpdateKelas=kelas::where('id',$idData)->first();
        if( $dataUpdateKelas == null){
            kelas::create($data);
            $this->resetVar($data);
        }else{
            kelas::find($idData)->first()->update($data);
        }
    }

    private function resetVar($data)
    {
        $this->nama_kelas=null;
        $this->kompetensi_keahlian=null;
    }

    public function render()
    {
        return view('livewire.kelas-form');
    }
}

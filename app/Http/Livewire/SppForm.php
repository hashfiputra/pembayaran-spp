<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\spp;

class SppForm extends Component
{
    public $tahun, $nominal, $idAction;
    protected $listeners=['getModalId'];
    
    public function getModalId($idUpdate)
    {
        $this->idAction=$idUpdate;
        $idSPP=spp::find($this->idAction);
        $this->tahun=$idSPP->tahun;
        $this->nominal=$idSPP->nominal;
    }

    public function simpan()
    {
        $data=[
            'tahun'=>$this->tahun,
            'nominal'=>$this->nominal,
        ];

        $idData=['id'=>$this->idAction];

        $dataUpdateSPP=spp::where('id',$idData)->first();
        if( $dataUpdateSPP == null){
            spp::create($data);
            $this->resetVar($data);
        }else{
            spp::find($idData)->first()->update($data);
        }
    }

    private function resetVar($data)
    {
        $this->tahun=null;
        $this->nominal=null;
    }

    public function render()
    {
        return view('livewire.spp-form');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\spp;

class SppComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;
    
    public function selectedItem($idAction, $action)
    {
        $this->idItem=$idAction;

        if($action=='hapus'){
            $this->dispatchBrowserEvent('openDeleteSPP');
        }else{
            $this->emit('getModalId', $this->idItem);
            $this->dispatchBrowserEvent('openUpdateSPP');
        }
    }

    public function hapus(){
        spp::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('spp');
    }

    public function render()
    {
        $dataSPP=spp::latest()->get();
        return view('livewire.spp-component', ['spp'=>$dataSPP])->layout('layouts.base');
    }
}

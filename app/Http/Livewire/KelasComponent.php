<?php

namespace App\Http\Livewire;

use App\Models\kelas;
use Livewire\Component;

class KelasComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;

    public function selectedItem($idAction, $action)
    {
        $this->idItem=$idAction;
        if ($action == 'hapus'){
            $this->dispatchBrowserEvent('openDeleteKelas');
        }else{
            $this->emit('getModalId', $this->idItem);
            $this->dispatchBrowserEvent('openUpdateKelas');
        }
    }
    
    public function hapus()
    {
        kelas::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('kelas');
    }

    public function render()
    {
        $dataKelas=kelas::latest()->get();
        return view('livewire.kelas-component', ['kelas'=>$dataKelas])->layout('layouts.base');
    }
}

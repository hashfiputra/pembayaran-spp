<?php

namespace App\Http\Livewire;

use App\Models\siswa;
use Livewire\Component;

class SiswaComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;

    public function selectedItem($idAction, $action)
    {
        $this->idItem=$idAction;
        if ($action == 'hapus'){
            $this->dispatchBrowserEvent('openDeleteSiswa');
        }else{
            $this->emit('getModalId', $this->idItem);
            $this->dispatchBrowserEvent('openUpdateSiswa');
        }
    }
    
    public function hapus()
    {
        siswa::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('siswa');
    }

    public function render()
    {
        $dataSiswa=siswa::latest()->get();
        return view('livewire.siswa-component', ['siswa'=>$dataSiswa])->layout('layouts.base');
    }
}

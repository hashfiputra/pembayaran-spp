<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PetugasComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;

    public function selectedItem($idAction, $action)
    {
        $this->idItem=$idAction;

        if($action=='hapus'){
            $this->dispatchBrowserEvent('openDeletePetugas');
        }else{
            $this->emit('getModalId', $this->idItem);
            $this->dispatchBrowserEvent('openUpdatePetugas');
        }
    }

    public function hapus(){
        User::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('petugas');
    }

    public function render()
    {
        $dataPetugas=DB::select('select * from users where level = "petugas"');
        return view('livewire.petugas-component', ['petugas' => $dataPetugas])->layout('layouts.base');
    }
}

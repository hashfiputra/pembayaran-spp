<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SiswaUserComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;

    public function selectedItem($idAction, $action)
    {
        $this->idItem=$idAction;

        if($action=='hapus'){
            $this->dispatchBrowserEvent('openDeleteSiswaUser');
        }else{
            $this->emit('getModalId', $this->idItem);
            $this->dispatchBrowserEvent('openUpdateSiswaUser');
        }
    }

    public function hapus(){
        User::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('siswaUser');
    }

    public function render()
    {
        $dataSiswaUser=DB::select('select * from users where level = "siswa"');
        return view('livewire.siswa-user-component', ['siswaUser' => $dataSiswaUser])->layout('layouts.base');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PetugasForm extends Component
{
    public $name, $email, $password, $level, $username, $idAction;
    protected $listeners=['getModalId'];

    public function getModalId($idUpdate)
    {
        $this->idAction=$idUpdate;
        $idPetugas=User::find($this->idAction);
        $this->username=$idPetugas->username;
        $this->name=$idPetugas->name;
        $this->email=$idPetugas->email;
        $this->password=$idPetugas->username;
    }

    public function simpan()
    {
        $data=[
            'username'=>$this->username,
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->username),
            'level'=>'petugas'
        ];

        $idData=['id'=>$this->idAction];

        $dataUpdatePetugas=User::where('id',$idData)->first();
        if( $dataUpdatePetugas == null){
            User::create($data);
            $this->resetVar($data);
        }else{
            User::find($idData)->first()->update($data);
        }
    }

    private function resetVar($data)
    {
        $this->username=null;
        $this->name=null;
        $this->email=null;
        $this->password=null;
        $this->level=null;
    }

    public function render()
    {
        return view('livewire.petugas-form');
    }
}

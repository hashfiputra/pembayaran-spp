<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SiswaUserForm extends Component
{
    public $name, $email, $password, $level, $username, $idAction;
    protected $listeners=['getModalId'];

    public function getModalId($idUpdate)
    {
        $this->idAction=$idUpdate;
        $idSiswaUser=User::find($this->idAction);
        $this->username=$idSiswaUser->username;
        $this->name=$idSiswaUser->name;
        $this->email=$idSiswaUser->email;
        $this->password=$idSiswaUser->username;
    }

    public function simpan()
    {
        $data=[
            'username'=>$this->username,
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->username),
            'level'=>'siswa'
        ];

        $idData=['id'=>$this->idAction];

        $dataUpdateSiswaUser=User::where('id',$idData)->first();
        if( $dataUpdateSiswaUser == null){
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
        return view('livewire.siswa-user-form');
    }
}

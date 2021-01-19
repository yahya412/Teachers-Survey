<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Controller extends Component
{
 public $user;
    public function ShiftAdmin($id)
    {
        $this->user=User::find($id);
     dd($this->user);
        $this->user->role===1 ? $e->role=0:$e->role=1;
        $this->user->save();
        
    }
 
    public function render()
    {
        $users=User::all();
        
        return view('livewire.controller',compact('users'));
    }
}

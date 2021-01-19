<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usersController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('users',compact('users'));
    }
    public function makeAdmin($id)
    {
        $e=User::find($id);
     
        $e->role===1 ? $e->role=0:$e->role=1;
        $e->save();
        return redirect(route('users'));
    }


}

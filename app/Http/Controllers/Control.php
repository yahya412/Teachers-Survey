<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Url;
use Illuminate\Support\Str;
class Control extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('control.index',compact('users'));
    }
    
    
    public function makeAdmin($id)
    {
        $e=User::find($id);
     
        $e->role===1 ? $e->role=0:$e->role=1;
        $e->save();
        return redirect(route('control.index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $url=$request->validate([
            'section' => 'required|max:255',
            'date' => 'required|date',
        ]);

        $url=Url::create([
            'url' => Str::random(10),
            'user_id'=>$id,
            'section'=> $request->input('section'),
            'date'=> $request->input('date'),
        ]);

        $fullUrl = $request->root();
        $fullUrl=$fullUrl . '/url/' . $url->url;
        // var_dump($fullUrl);

         return view('control.show',compact('fullUrl'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('control.create',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;
// use Request;
class urlController extends Controller
{
    
    public function show($id)
    {
        return view('url',compact('id'));
    }
    public function create(Request $request, $id)
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
        $fullUrl=$fullUrl.'/url/';
        // var_dump($fullUrl);
         return $fullUrl.''.$url->url;
 
 
    }
  
}

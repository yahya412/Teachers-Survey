<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Url;
use App\Models\User;
use Carbon\Carbon;

class questionsController extends Controller
{
    public $url;
    public function form($u)
    {
        // print_r(Carbon::today()->toDateString());
        $u1=Url::where('url','=',$u)->whereDate('date','=', Carbon::today()->toDateString())->first();
        abort_if(!$u1, 419);
        $this->url=$u1;

       return view('form',compact('u1'));
    }


    public function store(Request $request, $id)
    {
       
        
         $data=$request->validate([
            'q1'=>'required ',
            'q2'=>'required ',
            'q3'=>'required ',
            'q4'=>'required ',
            'q5'=>'required ',
            'q6'=>'required ',
            'q7'=>'required ',
            'q8'=>'required ',
            'q9'=>'required ',
            'q10'=>'required ',
            'qn'=>'required |max:255',
        ]);
       
        $data=Question::create([
            'q1'=>$request->input('q1'),
            'q2'=>$request->input('q2'),
            'q3'=>$request->input('q3'),
            'q4'=>$request->input('q4'),
            'q5'=>$request->input('q5'),
            'q6'=>$request->input('q6'),
            'q7'=>$request->input('q7'),
            'q8'=>$request->input('q8'),
            'q9'=>$request->input('q9'),
            'q10'=>$request->input('q10'),
            'qn'=>$request->input('qn'),
            'url_id'=>$id,
            'user_id'=>1,


        ]);
       
        return view('tnx');

         

    }
}

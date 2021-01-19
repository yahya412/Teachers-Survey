<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class SummaryDetails extends Component
{
    public function render()
    {

        $param=42;
    $count=DB::table('questions')->where('url_id',$param)->count();
    $data=DB::table('questions')
        ->select(
         DB::raw('sum(q1) as s1'),
         DB::raw('sum(q2) as s2'),
         DB::raw('sum(q3) as s3'),
         DB::raw('sum(q4) as s4'),
         DB::raw('sum(q5) as s5'),
         DB::raw('sum(q6) as s6'),
         DB::raw('sum(q7) as s7'),
         DB::raw('sum(q8) as s8'),
         DB::raw('sum(q9) as s9'),
         DB::raw('sum(q10) as s10')
         )
        ->where('url_id',$param)->get();
        
        foreach($data[0] as $key=>&$value){
           $value=$value/$count;
        }
///////////////////////////////////////////////////

    for($x=1; $x<=10;$x++){
        $q='q' . $x;
        for($y=1;$y<=5;$y++){
            $txt='count(*) as total' .$x .$y;
            $data_show[$x][$y]=DB::table('questions')
                ->select(
                    DB::raw($txt),
                    )->where('url_id',$param)->where($q,$y)->get();
          }
    }




        // dump ($data);
        return view('livewire.summary-details',compact('data','data_show'));
    }
}

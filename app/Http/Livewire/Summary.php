<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class Summary extends Component
{


    public function render()
    {
         
    //select users.name,urls.id,urls.url,urls.section,urls.date, questions.count(id) from users ,urls,questions where users.id=urls.user_id  and urls.id=questions.url_id group by urls.id;
    
    $url_data=DB::table('users')      
        ->select('users.name','urls.id','urls.url','urls.section','urls.date')
        ->Join('urls','users.id','=','urls.user_id') ;
    
    $survey_data=DB::table('questions')
        ->select('url_id',DB::raw('count(id) as count'))
        ->groupBy('url_id');

    $data=DB::query()
        ->select('url_data.name','url_data.url','url_data.section','url_data.date','survey_data.*')        ->fromSub($url_data,'url_data')
        ->leftjoinSub($survey_data,'survey_data','url_data.id','=','survey_data.url_id')
        ->orderBy('url_data.name')
        ->get();

        return view('livewire.summary',compact('data'));
    }
}

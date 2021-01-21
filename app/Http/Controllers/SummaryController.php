<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Question;

class SummaryController extends Controller
{

    
    public $param;
    public function index()
    {
            
        $url_data=DB::table('users')      
        ->select('users.name','urls.id','urls.url','urls.section','urls.date')
        ->Join('urls','users.id','=','urls.user_id') ;

        $survey_data=DB::table('questions')
        ->select('url_id',DB::raw('count(id) as count'))
        ->groupBy('url_id');

        $data=DB::query()
        ->select('url_data.id','url_data.name','url_data.url','url_data.section','url_data.date','survey_data.*')        ->fromSub($url_data,'url_data')
        ->joinSub($survey_data,'survey_data','url_data.id','=','survey_data.url_id')
        ->orderBy('url_data.name')
        ->get();

    return view('summary.index',['datas'=>$data]);
    }


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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        


        $this->param=$id;
    $count=DB::table('questions')->where('url_id',$this->param)->count();
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
        ->where('url_id',$this->param)->get();
        
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
                    )->where('url_id',$this->param)->where($q,$y)->get();
            
          }
    }



//compact('data','data_show')
        // dump ($data);
        return view('summary.show',compact('data',['data_show','count']));











    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comment($id)
    {
        $comments=Question::where('url_id',$id)->get();
        return view('summary.comments',compact('comments',$comments));
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

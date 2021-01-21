<?php

use Illuminate\Support\Facades\Route;
use App\Models\Question;
use  App\Http\Controllers\questionsController;
use  App\Http\Controllers\usersController;
use  App\Http\Controllers\urlController;
use  App\Http\Controllers\Control;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SummaryController;
use App\Http\Livewire\Summary;
use App\Http\Livewire\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/url/{id}/tnx',[questionsController::class,'store'])->name('questions.create');
Route::get('/url/{u}',[questionsController::class,'form']);


Route::get('/controller/{id}/url/{url}',[Control::class,'store'])->name('show');
Route::post('/controller/{id}/url',[Control::class,'store'])->name('url.create');
Route::get('/controller/{id}',[Control::class,'edit'])->name('url.generateurl');
// Route::post('/users/{id}',[usersController::class,'makeUser'])->name('makeuser');


Route::get('/summary/{id}/comment',[\App\Http\Controllers\SummaryController::class,'comment'])->name('summary.comment');
Route::get('/users',[usersController::class,'index'])->name('users');
// Route::get('test',[QuestionController::class,'index']);
Route::resource('summary', \App\Http\Controllers\SummaryController::class);
Route::resource('controller', \App\Http\Controllers\Control::class);
Route::post('/users/{id}',[Control::class,'makeAdmin'])->name('users.makeadmin');
// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('summary', \App\Http\Controllers\SummaryController::class);

//     Route::resource('users', \App\Http\Controllers\UsersController::class);
// });

// Route::get('/controller',Controller::class)->name('livewire.controller');
Route::get('test',function(){
    
    $param=1;
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
        ->where('url_id',$param);

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

    return view('test')->with(array('data'=>$data,'data_show'=>$data_show));
});

require __DIR__.'/auth.php';


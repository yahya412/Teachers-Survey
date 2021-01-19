<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Question;
class Url extends Model
{
    use HasFactory;

    protected $guraded=[];
    
    protected $fillable = [
        
        'url',
        'user_id',
        'section',
        'date',
        
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Question;
use App\Models\Url;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;


    protected $fillable = [
        
        'name',
        'username',
        'email',
        'password',
        'rold',
        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    // protected $fillable = [
    //     'username', 'email', 'password','name','token'
    // ];
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function urls(){
        return $this->hasMany(Url::class);
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

public function isAdmin()
{
return $user->role;
}


}

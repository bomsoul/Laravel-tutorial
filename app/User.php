<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subjects(){ //for 1-m
        return $this->hasMany('\App\Subject');
        //return $this->hasMany('\App\Comment'); // 1-1
    }

    public function isAdmin(){
        return $this->role ="ADMINISTRATOR";
    }

    public function isTeacher(){
        return $this->role = "TEACHER";
    }

    public function isStudent(){
        return $this->role = "STUDENT";
    }
}

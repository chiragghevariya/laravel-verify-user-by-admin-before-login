<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','state',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function UserRole($num){

        switch($num){

            case 0:
                return 'student';
                break;

            case 1:
                return 'admin';    
                break;

            default:
                return 'null';    
        }
    }

    // public static function name($id){

    //     return User::where(Auth::user()->verify,'=','NotActive');

    // }

}

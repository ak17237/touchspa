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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function roles(){
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }
    public function hasAnyRole($roles){ // Arguments $roles kurš sastāves no tiesības kuras mēs gribam pārbaudei
            if($this->hasRole($roles)){ // Pārbauda vai lietotājam ir šī tiesība
                    return true;
        }
        return false;
    }
    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){ // Saņem piekļuvi pie tiesībām sī lietotāja un redz vai šajās tiesībās lietotājs ir piešķirts,tiesība kuru mēs pārbaudam parādās
            return true;
        }
        return false;
    }
}

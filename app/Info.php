<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public static function Homepage(){
        return static::where('Vieta','Galvenā lapa.Par mums')->get();
    }
    public static function parmumsEtikete(){
        return static::where('Vieta','Par mums sadaļa.SPA Etiķete')->get();
    }
    public static function parmumsFilosofija(){
        return static::where('Vieta','Par mums sadaļa.Filosofija')->get();
    }
    public static function akcija(){
        return static::where('Vieta','Akcija')->get();
    }
    public static function pakalpojumi(){
        return static::where('Vieta','Pakalpojumi')->get();
    }    
}

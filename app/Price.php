<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public static function Frizieris(){
        return static::where('Vieta','Frizieris')->get();
    }
    public static function Manikirs(){
        return static::where('Vieta','Manikīrs')->get();
    }
    public static function Pedikirs(){
        return static::where('Vieta','Pedikīrs')->get();
    }
}

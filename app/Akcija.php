<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akcija extends Model
{
    protected $fillable = ['Nosaukums','Apraksts']; // masīvā fillable ir pārskaitīti tie atribūti kuriem ir atļauts masīvi aizpildīties
}

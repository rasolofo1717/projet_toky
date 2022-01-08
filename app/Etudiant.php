<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable =  [
        'nom', 'prenoms', 'date_naiss'
    ];
}

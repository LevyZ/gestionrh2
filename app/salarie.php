<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salarie extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'id_niveau',
        'id_suivi'
    ];

    protected $table = 'salarie';
    public $timestamps = false;
}

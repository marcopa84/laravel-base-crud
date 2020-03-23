<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cellular extends Model
{
    protected $fillable = [
        'marca', 'modello', 'peso', 'prezzo', 'imgurl'
    ];
}

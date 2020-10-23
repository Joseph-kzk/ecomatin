<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    protected $primaryKey = "idsujet";

    protected $fillable = [
        'idsujet',
        'idmenu',
        'titre',
        'rubrique',
        'responsable',
        'encombrement',
        'created_at',
        'updated_at'
    ];

    protected $table = 'sujets';
}

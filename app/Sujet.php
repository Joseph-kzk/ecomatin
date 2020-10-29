<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sujet extends Model
{
    use Notifiable;
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

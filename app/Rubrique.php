<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    protected $primaryKey = "idrubrique";

    protected $fillable = [
        'idrubrique',
        'nom',
        'responsable',
        'description',
        'created_at',
        'updated_at'
    ];

    protected $table = 'rubriques';
}

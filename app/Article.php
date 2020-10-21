<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = "idarticle";

    protected $fillable = [
        'idarticle',
        'iduser',
        'titre',
        'surtitre',
        'auteur',
        'chapeau',
        'type',
        'rubrique',
        'image',
        'legende',
        'texte',
        'created_at',
        'updated_at'
    ];

    protected $table = 'articles';

    public function scopeUser($squery)
    {
        return $squery->where('iduser',auth()->id());
    }
}

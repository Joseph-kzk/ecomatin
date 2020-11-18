<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use Notifiable;
    protected $primaryKey = "idarticle";

    protected $fillable = [
        'idarticle',
        'iduser',
        'titre',
        'surtitre',
        'auteur',
        'chapeau',
        'reseau',
        'type',
        'rubrique',
        'image',
        'legende',
        'tag',
        'texte',
        'created_at',
        'updated_at'
    ];

    protected $table = 'articles';

    public function scopeUser($squery)
    {
        return $squery->where('iduser',auth()->id());
    }

    public function user(){
        return $this->belongsTo('App\User', 'iduser');
    }

}

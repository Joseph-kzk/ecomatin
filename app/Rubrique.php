<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Rubrique extends Model
{
    use Notifiable;
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

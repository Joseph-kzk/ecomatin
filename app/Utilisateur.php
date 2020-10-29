<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Model
{
    use Notifiable;
    protected $primaryKey = "idutilisateur";

    protected $fillable = [
        'nom',
        'prenom',
        'numero',
        'role',
        'login',
        'password',
        'created_at',
        'updated_at'
    ];

    protected $table = 'utilisateurs';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
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

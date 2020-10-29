<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use Notifiable;
    protected $primaryKey = "idmenu";

    protected $fillable = [
        'nom',
        'created_at',
        'updated_at'
    ];

    protected $table = 'menus';
}

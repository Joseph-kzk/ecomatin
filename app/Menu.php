<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = "idmenu";

    protected $fillable = [
        'nom',
        'created_at',
        'updated_at'
    ];

    protected $table = 'menus';
}

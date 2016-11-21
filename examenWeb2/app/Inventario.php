<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Inventario extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'idProducto', 'cantidad', 'cantidadMinima', 'cantidadMaxima', 'gravado',
    ];

    protected $hidden = [
         'remember_token',
    ];
}
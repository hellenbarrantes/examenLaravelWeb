<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Facturacion extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'idCliente', 'fecha', 'montoTotal', 'subtotal', 'impuesto', 'idProducto' ,
    ];

    protected $hidden = [
         'remember_token',
    ];
}
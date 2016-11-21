<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Producto extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'nombre', 'marca', 'familia', 'casaFabricacion', 'tipoUnidad', 'departamento', 'activo', 'fechaIngreso', 'unidad', 'impuesto' ,
    ];

    protected $hidden = [
         'remember_token',
    ];
}
<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'nacimiento', 'direccion', 'estadoCivil', 'genero', 'fechaIngreso', 'tipo', 'descuento' ,
    ];

    protected $hidden = [
         'remember_token',
    ];
}
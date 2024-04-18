<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'domicilio',
        'telefono',
        'email',
        'documento',
        'user_name'
    ];

    protected $casts = [
        'nombre' => 'string',
        'domicilio' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'documento' => 'string',
        'user_name' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'documento' => 'required',
        'user_name' => 'nullable'
    ];

    
}

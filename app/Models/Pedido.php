<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_pedido',
        'title',
        'abono',
        'start',
        'end',
        'imagen',
        'total',
        'descripcion',
    ];
}

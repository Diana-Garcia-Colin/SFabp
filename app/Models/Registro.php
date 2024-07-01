<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable=[
        'producto_id',
        'fecha_entrega',
        'cantidad_entrega',
        'encargado_id',
        'img',

        
    ];
public function productos()
{
    return $this->belongsTo(Productos::class);
}
public function encargado()
{
    return $this->belongsTo(Encargado::class);
}
}

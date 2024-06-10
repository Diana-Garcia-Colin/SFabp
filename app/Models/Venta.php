<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'registro_punto_venta';

    protected $fillable = [
        'fecha_venta', 
        'producto_id', 
        'cliente_id', 
        'encargado_id'
    ];

    public function encargado()
    {
        return $this->belongsTo(Encargado::class, 'encargado_id'); // Relación belongsTo con Encargado
    }

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'producto_id'); // Relación belongsTo con Producto
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id'); // Relación belongsTo con Producto
    }
}

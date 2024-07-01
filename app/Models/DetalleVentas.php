<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'cantidad',
        'precio_unitario',
        'total',
    ];

    // Relación con el modelo Producto
    public function producto()
    {
        return $this->belongsTo(Productos::class, 'producto_id');
    }
}

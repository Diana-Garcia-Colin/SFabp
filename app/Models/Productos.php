<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable=[
        'nom_pro',
        'precio',
        'descripcion',
        'categoria_id',
        'img',
        
    ];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id'); // Relación belongsTo con Encargado
    }
}

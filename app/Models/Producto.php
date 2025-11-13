<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria; // ✅ importa el modelo relacionado

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'stock', 'descripcion', 'categoria_id']; // ✅ importante incluir la FK si la tienes en la tabla

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

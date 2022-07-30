<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id', 'medida_id','tipouso_id','marca_id','vencimiento','barras','codigo','nombre','detalle','comprainicio','status'
    ];

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function Medida()
    {
        return $this->belongsTo(Medida::class);
    }
    public function Tipouso()
    {
        return $this->belongsTo(Tipouso::class);
    }
    public function Marca()
    {
        return $this->belongsTo(Marca::class);
    }
}

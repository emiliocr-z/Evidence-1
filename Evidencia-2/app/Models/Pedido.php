<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['numero_factura', 'fecha', 'estado', 'direccion_entrega', 'notas'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }
}

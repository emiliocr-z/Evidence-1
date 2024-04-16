<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'rol'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}

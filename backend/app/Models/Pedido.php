<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';

    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'solicitado', 'id_produto', 'id_cliente'];

    protected $casts = [
        'solicitado' => 'boolean',
        'valor' => 'float'
    ];
}

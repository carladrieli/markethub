<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';

    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'valor', 'id_categoria_produto', 'id_estabelecimento'];

    protected $casts = [
        'nome' => 'string',
        'valor' => 'float'
    ];
}

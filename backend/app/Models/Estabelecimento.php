<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    protected $table = 'estabelecimento';

    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'descricao', 'endereco', 'id_categoria_estabelecimentos'];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string',
        'endereco' => 'string'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEstabelecimento extends Model
{
    use HasFactory;

    protected $table = 'categoria_estabelecimentos';

    protected $primaryKey = 'id';

    protected $fillable = ['nome'];

    protected $casts = [
        'nome' => 'string',
    ];
}

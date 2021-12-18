<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    use HasFactory;

    public $primary_key = 'id_tipo_imovel';
    public $fillable = ['descricao'];
    public $timestamps = false;
    public $table = 'tipo_imovel';
}

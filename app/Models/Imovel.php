<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    public $primary_key = 'id_imovel';
    public $fillable = ['descricao'];
    public $timestamps = false;
    public $table = 'imovel';
}

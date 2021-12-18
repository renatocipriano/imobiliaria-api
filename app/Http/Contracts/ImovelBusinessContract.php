<?php

namespace App\Http\Contracts;

use Illuminate\Support\Collection;

interface ImovelBusinessContract
{
    public function getImoveis() : Collection;
}

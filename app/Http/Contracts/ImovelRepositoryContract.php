<?php

namespace App\Http\Contracts;

use Illuminate\Support\Collection;

interface ImovelRepositoryContract
{
    public function getImoveis() : Collection;
}

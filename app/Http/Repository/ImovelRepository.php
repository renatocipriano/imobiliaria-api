<?php

namespace App\Http\Repository;

use App\Http\Contracts\ImovelRepositoryContract;
use App\Models\Imovel;
use Illuminate\Support\Collection;

class ImovelRepository implements ImovelRepositoryContract
{
    public function __construct(private Imovel $model)
    {
    }

    public function getImoveis() : Collection
    {
        return $this->model->all();
    }
}

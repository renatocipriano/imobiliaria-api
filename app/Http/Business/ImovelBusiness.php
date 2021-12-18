<?php

namespace App\Http\Business;

use App\Http\Contracts\ImovelRepositoryContract;
use App\Http\Contracts\ImovelBusinessContract;
use Illuminate\Support\Collection;

class ImovelBusiness implements ImovelBusinessContract
{
    public function __construct(private ImovelRepositoryContract $imovelRepository)
    {
    }

    public function getImoveis() : Collection
    {
        return $this->imovelRepository->getImoveis();
    }
}

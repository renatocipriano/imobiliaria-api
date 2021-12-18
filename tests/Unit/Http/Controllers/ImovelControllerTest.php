<?php

namespace Tests\Unit\Http\Controllers;

use App\Enums\TipoImovelEnum;
use App\Enums\TipoNegociacaoEnum;
use App\Http\Business\ImovelBusiness;
use App\Http\Controllers\ImovelController;
use App\Http\Repository\ImovelRepository;
use App\Models\Imovel;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;

class ImovelControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function deve_retornar_imoveis_em_json()
    {
        $listaImoveisMock = Collection::make([
            new Imovel([
                'nome' => 'Lote 1',
                'valor' => 90000.50,
                'descricao' => 'Lorem Ipsum',
                'id_tipo_imovel' => TipoImovelEnum::LOTE_OU_TERRENO,
                'tipo_negociacao' => TipoNegociacaoEnum::COMPRAR
            ]),
            new Imovel([
                'nome' => 'Apartamento 1',
                'valor' => 1150.90,
                'descricao' => 'Lorem Ipsum',
                'id_tipo_imovel' => TipoImovelEnum::APARTAMENTO,
                'tipo_negociacao' => TipoNegociacaoEnum::ALUGAR
            ]),
        ]);

        $imovelBusiness = $this->createMock(ImovelBusiness::class);
        $imovelBusiness->method('getImoveis')
            ->willReturn($listaImoveisMock);

        $imovelController = new ImovelController($imovelBusiness);

        $listaImoveis = $imovelController->index();

        $this->assertJson($listaImoveis);
    }
}

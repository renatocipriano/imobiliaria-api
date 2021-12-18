<?php

namespace Tests\Unit\Http\Business;

use App\Enums\TipoImovelEnum;
use App\Enums\TipoNegociacaoEnum;
use App\Http\Business\ImovelBusiness;
use App\Http\Repository\ImovelRepository;
use App\Models\Imovel;
use App\Models\TipoImovel;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;

class ImovelBusinessTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function deve_retornar_lista_imoveis()
    {
        $listaImoveisMock = Collection::make([
            new Imovel([
                'nome' => 'Lote 1',
                'valor' => 90000.50,
                'descricao' => 'Lorem Ipsum',
                'id_tipo_imovel' => TipoImovelEnum::LOTE_OU_TERRENO,
                'tipo_negociacao' =>TipoNegociacaoEnum::COMPRAR
            ]),
            new Imovel([
                'nome' => 'Apartamento 1',
                'valor' => 1150.90,
                'descricao' => 'Lorem Ipsum',
                'id_tipo_imovel' => TipoImovelEnum::APARTAMENTO,
                'tipo_negociacao' =>TipoNegociacaoEnum::ALUGAR
            ]),
        ]);

        $imovelRepository = $this->createMock(ImovelRepository::class);
        $imovelRepository->method('getImoveis')
            ->willReturn($listaImoveisMock);

        $imoveisBusiness = new ImovelBusiness($imovelRepository);

        $listaImoveis = $imoveisBusiness->getImoveis();

        $this->assertIsIterable($listaImoveis);
    }
}

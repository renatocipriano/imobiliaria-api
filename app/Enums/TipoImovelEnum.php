<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

use function PHPUnit\Framework\matches;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TipoImovelEnum extends Enum
{
    const APARTAMENTO = 1;
    const CASA = 2;
    const COBERTURA = 3;
    const GALPAO = 4;
    const LOTE_OU_TERRENO = 5;
    const OUTROS = 6;
    const QUARTO_SUITE_HOTEL = 7;
    const SALA = 8;
    const SITIO = 9;
    const STUDIO = 10;


    public static function getDescricao(Int $id){
        return match($id) {
            1   => 'Apartamento',
            2   => 'Casa',
            3   => 'Cobertura',
            4   => 'Galpão',
            5   => 'Lote ou Terreno',
            6   => 'Outros',
            7   => 'Quarto/Suíte Hotel',
            8   => 'Sala',
            9   => 'Sítio',
            10  => 'Studio',
            default => '',
        };
    }
   
}

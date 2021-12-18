<?php

namespace Database\Seeders;

use App\Models\TipoImovel;
use Illuminate\Database\Seeder;

class TipoImovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            "Apartamento",
            "Casa",
            "Cobertura",
            "Galpão",
            "Lote ou Terreno",
            "Outros",
            "Quarto/Suíte Hotel",
            "Sala",
            "Sítio",
            "Studio",
        ];

        foreach ($tipos as $tipo) {
            TipoImovel::create([
                'descricao' => $tipo
            ]);
        }
    }
}

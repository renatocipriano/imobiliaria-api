<?php

use App\Enums\TipoNegociacaoEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_imovel', function (Blueprint $table) {
            $table->id('id_tipo_imovel');
            $table->string('descricao', 255);
        });

        Schema::create('imovel', function (Blueprint $table) {
            $table->id('id_imovel');
            $table->string('nome', 255);
            $table->decimal('valor', 8, 2);
            $table->text('descricao')->nullable();
            $table->unsignedBigInteger('id_tipo_imovel');
            $table->enum('tipo_negociacao', TipoNegociacaoEnum::getValues());

            $table->foreign('id_tipo_imovel')->references('id_tipo_imovel')->on('tipo_imovel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel');
        Schema::dropIfExists('tipo_imovel');
    }
}

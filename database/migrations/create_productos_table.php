<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('concepto');
            $table->string('tipo_documento');
            $table->string('serie');
            $table->string('numero');
            $table->string('nombre');
            $table->string('color');
            $table->string('presentacion');
            $table->string('lote');
            $table->date('fecha_vencimiento');
            $table->integer('cantidad');
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
        Schema::dropIfExists('productos');
    }
}

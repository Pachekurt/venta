<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('medida_id')->unsigned();
            $table->bigInteger('tipouso_id')->unsigned();
            $table->bigInteger('marca_id')->unsigned();
            $table->integer('vencimiento');
            $table->string('barras',100);
            $table->string('codigo',30);
            $table->string('nombre',100);
            $table->text('detalle');
            $table->decimal('comprainicio', 11, 2);
            $table->decimal('ventainicio', 11, 2);
            $table->dateTime('datecreated', 0);
            $table->integer('status');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('medida_id')->references('id')->on('medidas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tipouso_id')->references('id')->on('tipousos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onUpdate('cascade')->onDelete('cascade');
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

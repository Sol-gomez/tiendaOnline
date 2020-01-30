<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //metodo up sirve para crear la estructura de una tabla 
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('extract'); //para mostrar una descripcion corta del producto
            $table->decimal('price',5,2);
            $table->string('image');
            $table->boolean('visible');
          /*  $table->integer('category_id')->unsigned(); //para representar una clave foranea primero creamos el campo de tipo int sin signo
            $table->foreign('category_id') //y aca le decimos q category_id es una FK q havce referencia al id en la tabla categories
                    ->references('id')
                    ->on('categories')
         */           -onDelete('cascade'); //y q cuando se borre una categoria se borren todos los productos relacionados
            $table->timestamps();//nos crea los campos create_at y update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //sirve para generar
    {
        Schema::dropIfExists('products');
    }
}

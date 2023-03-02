<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre", 40)->nullable();
            $table->text("descripcion")->nullable();
            $table->string("foto", 255)->nullable();
            $table->decimal("precio", 6, 2);//6 digitos de antes del . y 2 despues
            $table->integer("cantidad");
            $table->string("marca");
            $table->string("codigo");
            $table->string("categoria", 255)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }
//php artisan make:seed ProductsSeeder: guarda datos en la bd, seeder guarda datos en la bd
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

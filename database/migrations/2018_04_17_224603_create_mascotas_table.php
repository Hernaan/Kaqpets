<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mas_nombre');
            $table->integer('mas_edad');
            $table->string('mas_imagen');
            $table->enum('mas_apto', ['para jugar con criaturas', 'para cuidar la casa', 'otros'])->default('otros');
            $table->enum('mas_castrado', ['si', 'no'])->default('no');
            $table->enum('mas_sexo', ['macho', 'hembra'])->default('macho');
            $table->text('mas_descripcion');
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
        Schema::dropIfExists('mascotas');
    }
}

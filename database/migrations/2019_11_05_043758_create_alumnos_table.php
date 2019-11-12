<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matricula');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->boolean('activo');
            $table->timestamps();
        });

        DB::table('alumnos')->insert([
            [
                'matricula' => '157851',
                'nombre' => 'Guillermo Joaquin',
                'apellido' => 'Alvarez Ordoñez',
                'activo' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'matricula' => '148283',
                'nombre' => 'Jesus Adrian',
                'apellido' => 'Guerrero Valtierra',
                'activo' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'matricula' => '123123',
                'nombre' => 'Juanito Intruso',
                'apellido' => 'Perez',
                'activo' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}

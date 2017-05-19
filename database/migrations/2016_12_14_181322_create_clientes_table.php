<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
<<<<<<< HEAD
            $table->enum('type_cliente', ['Natural', 'Juridico']);
=======
            $table->enum('type_cliente', ['Persona Natural', 'Representante Legal']);
>>>>>>> fea3c0d7fa227d821bd4731c28d49c11d5ad25c3
            $table->string('razon_cliente');
            $table->string('riva_cliente')->unique();
            $table->string('registrosociedad_cliente')->unique();
            $table->string('registrocredencial_cliente')->unique();
            $table->string('nitsociedad_cliente', 100)->unique();
            $table->string('numresgcontribuyente_cliente')->unique();
            $table->string('giro_cliente',100);                                 
            $table->string('nombre_cliente', 100);
            $table->string('nit_cliente')->unique();
            $table->enum('docu_cliente',['DUI','Otra Identificacion']);
            $table->string('numdocumento_cliente');
            $table->string('direccion_cliente', 100);
            $table->string('teldirecto_cliente')->unique();
            $table->string('celular_cliente')->unique();
            $table->string('correo_cliente')->unique();            
            $table->string('oencargado_cliente', 100);
            $table->string('ref1nombre_cliente', 100);
            $table->string('ref1parentesco_cliente',50);
            $table->string('ref1telefono_cliente');
            $table->string('ref1celular_cliente');
            $table->string('ref2nombre_cliente', 100);
            $table->string('ref2parentesco_cliente',50);
            $table->string('ref2telefono_cliente');
            $table->string('ref2celular_cliente');
            $table->string('ref1per_nombre_cliente', 100);
            $table->string('ref1per_telefono_cliente');
            $table->string('ref1per_celular_cliente');
            $table->string('ref2per_nombre_cliente', 100);
            $table->string('ref2per_telefono_cliente');
            $table->string('ref2per_celular_cliente');        
            $table->string('tcontrato_cliente',1);
            $table->string('saludoper_cliente', 150);
            $table->integer('plazo_cliente');
            $table->date('fechain_cliente');
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
        Schema::dropIfExists('clientes');
    }
}

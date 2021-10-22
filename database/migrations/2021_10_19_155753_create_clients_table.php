<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            /* campos */
            $table->id();
            $table->string('name')->comment('nombre del cliente');
            $table->string('email')->comment('correo del cliente');
            $table->string('phone')->comment('teléfono del cliente');
            $table->string('address')->comment('dirección del cliente');
            $table->boolean('deleted')->comment('Eliminado lógico')->default(false);
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
        Schema::dropIfExists('clients');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            /* campos */
            $table->id();
            $table->date('Broadcast_date')->comment('fecha de emisión el reporte');
            /* llaves foraneas */
            /* relacion a la tabla usuarios */
            $table->foreignId('user_id')->constrained('users')->comment('los usuarios puede generar varios reportes')
            ->onDelete('cascade')->onUpdate('cascade');
            /* relacion a la tabla usuarios clientes */
            $table->foreignId('user_clients_id')->constrained('user_clients')->comment('el reporte tiene la informacion de usuarios y clientes')
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('reports');
    }
}

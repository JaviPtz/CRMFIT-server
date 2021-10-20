<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_clients', function (Blueprint $table) {
            $table->id();
            /* llaves foraneas */
            /* relacion a la tabla usuarios */
            $table->foreignId('user_id')->constrained('users')->comment('Un usuario tiene varios clientes')
            ->onDelete('cascade')->onUpdate('cascade');
            /* relacionado a la tabla clientes */
            $table->foreignId('client_id')->constrained('clients')->comment('un cliente tiene varios usuarios')
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
        Schema::dropIfExists('user_clients');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('Clientes')->onDelete('cascade');
            $table->integer('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('Horarios')->onDelete('cascade');
            $table->decimal('monto_pagar',8 , 4);
            $table->enum('estado_pago', ['espera', 'pagado', 'cancelado']);            
            $table->enum('estado_reserva', ['espera', 'reservado', 'finalizado']);
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
        Schema::dropIfExists('reservas');
    }
}

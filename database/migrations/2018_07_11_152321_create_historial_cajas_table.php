<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_cajas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caja_id')->unsigned();
            $table->foreign('caja_id')->references('id')->on('Cajas')->onDelete('cascade');
            $table->string('motivo');
            $table->enum('tipo', ['ingreso', 'egreso']);
            $table->integer('reserva_id')->unsigned()->nullable();
            $table->foreign('reserva_id')->references('id')->on('Reservas')->onDelete('cascade');
            $table->decimal('monto_actual', 8, 4);
            $table->decimal('monto', 8, 4);
            $table->decimal('monto_final', 8, 4);
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
        Schema::dropIfExists('historial_cajas');
    }
}

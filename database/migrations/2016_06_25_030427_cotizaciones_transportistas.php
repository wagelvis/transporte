<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Cotizaciones_transportistas
 *
 * @author  The scaffold-interface created at 2016-06-25 03:04:27pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CotizacionesTransportistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('cotizaciones_transportistas',function (Blueprint $table){
        $table->increments('id');
        $table->String('id_transportista');
        $table->String('comprobante_pago');
        $table->integer('codigo_deposito');
        $table->date('fecha_pago');
        $table->timestamps();
        
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('cotizaciones_transportistas');
    }
}

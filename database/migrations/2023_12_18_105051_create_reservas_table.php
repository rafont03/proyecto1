<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up(): void
   {
       Schema::create('reservas', function (Blueprint $table) {
           $table->id();
           $table->string('id_reserva');
           $table->string('id_usuario');
           $table->string('id_proyeccion');
           $table->string('num_asiento');
           $table->date('fecha_reserva');       
           $table->timestamps();
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('reservas');
   }
};

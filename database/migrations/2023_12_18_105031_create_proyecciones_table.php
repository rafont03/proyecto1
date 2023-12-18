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
       Schema::create('proyecciones', function (Blueprint $table) {
           $table->id();
           $table->string('id_pelicula');
           $table->string('id_sala');
           $table->date('fecha');
           $table->time('hora_inicio');
           $table->timestamps();
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('proyecciones');
   }
};

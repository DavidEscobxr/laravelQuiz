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
        Schema::create('images', function (Blueprint $table) {
            
             //$table->id();//quitamos la llave que se crea por defecto
             $table->string('url');
             //creamos los campor para alojar las llaves primarias
             $table->unsignedBigInteger('imageable_id')->nullable();
             $table->string('imageable_type');
             //llave compuesta
             $table->primary(['imageable_id','imageable_type']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};

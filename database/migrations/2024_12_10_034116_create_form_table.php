<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('NomorTelepon');
            $table->string('Asal');
            $table->enum('SkalaGempa', ['Tidak dirasakan', 'Dirasakan', 'Kerusakan Ringan' , 'Kerusakan Sedang' ,'Kerusakan Berat']);
            $table->text('KataKata');
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
        Schema::dropIfExists('form');
    }
};

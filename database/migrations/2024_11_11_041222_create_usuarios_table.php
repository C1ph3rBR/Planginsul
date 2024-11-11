<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Coluna id INT PRIMARY KEY AUTO_INCREMENT
            $table->string('name');
            $table->string('password'); // Armazene a senha em formato de hash
            $table->string('cpf')->unique();
            $table->boolean('ativo');
            $table->smallInteger('status_usr');
            $table->unsignedBigInteger('superior')->nullable();
            $table->string('matricula');
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

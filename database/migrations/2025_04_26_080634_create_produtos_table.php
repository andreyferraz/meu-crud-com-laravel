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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de ID auto-incrementável (chave primária)
            $table->string('nome');
            $table->text('descricao')->nullable(); // O campo descrição pode ser nulo
            $table->timestamps(); // Cria as colunas `created_at` e `updated_at` para registrar a data de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');// Caso precise desfazer a migration, a tabela será excluída
    }
};

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
    Schema::create('items', function (Blueprint $table) {
        $table->id(); // ID automático
        $table->string('name'); // Nome do item
        $table->text('description')->nullable(); // Descrição (opcional)
        $table->decimal('price', 8, 2)->nullable(); // Preço (opcional)
        $table->timestamps(); // Cria as colunas created_at e updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

<?php

Schema::create('fotos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
    $table->string('tipo');
    $table->string('ruta_archivo');
    $table->timestamps();
});

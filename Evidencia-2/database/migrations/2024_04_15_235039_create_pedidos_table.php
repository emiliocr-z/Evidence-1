<?php

Schema::create('pedidos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
    $table->string('numero_factura');
    $table->dateTime('fecha');
    $table->string('estado');
    $table->string('direccion_entrega');
    $table->text('notas')->nullable();
    $table->timestamps();
});

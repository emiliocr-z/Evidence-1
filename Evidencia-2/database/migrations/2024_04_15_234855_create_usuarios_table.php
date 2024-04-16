<?php

Schema::create('usuarios', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('rol');
    $table->timestamps();
});

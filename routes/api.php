<?php

Route::apiResource('usuarios', 'api\UsuarioController');

Route::apiResource('filmes', 'api\FilmeController');

Route::apiResource('atores', 'api\AtoreController');

Route::apiResource('categorias', 'api\CategoriaController');

Route::apiResource('usuarios/avaliar', 'api\AvaliacoesController');
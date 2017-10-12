<?php

Route::get('/', function () {
    return view('welcome');
});
//inicio rota Controle com prefixo produtos
Route::group(["prefix" => "produtos"], function () {
    Route::get("/", "ConceitoProdutos@index"); //Controle para listar os produtos na view
    Route::get("/novo", "ConceitoProdutos@novoView"); //Controle para form de cadastro dos produtos na view
    Route::post("/cadastrar", "ConceitoProdutos@cadastrar"); //Controle para Post dos produtos na view
    Route::get("/{id}/editar", "ConceitoProdutos@editarView"); //Controle para form editar os produtos na view
    Route::get("/{id}/excluir", "ConceitoProdutos@excluirView"); //Controle para chamada de exclusão dos produtos na view
    Route::get("/{id}/destroy", "ConceitoProdutos@destroy"); //Controle para ação excluir os produtos na view
    Route::post("/update", "ConceitoProdutos@update"); //Controle para update dos produtos na view
//fim rota Controle com prefixo produtos
});

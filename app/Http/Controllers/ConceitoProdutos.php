<?php

namespace App\Http\Controllers;

use App\Conceito;
use Illuminate\Http\Request;

class ConceitoProdutos extends Controller {

    private $produto;

    //Metodo construtor para instanciar
    public function __construct() {
        $this->produto = new Conceito();
    }

    //Metodo para retornar os dados em array na view
    public function index() {
        $list_produtos = Conceito::all();
        return view('produtos.index', [
            'produtos' => $list_produtos
        ]);
    }

    //Metodo para view cadastro
    public function novoView() {
        return view('produtos.cadastro');
    }

    //Metodo para Cadastrar os produtos
    public function cadastrar(Request $request) {
        $this->validate($request, [
            'produto' => 'required|min:3|max:100'
                ], [
            'produto.required' => 'Preencha o nome do Produto',
            'produto.min' => 'Minimo de 3 Caracteres ',
            'produto.max' => 'Máximo de 100 Caracteres '
        ]);
        $produto = Conceito::create($request->all());
        return redirect("/produtos")->with("message", "Produto Cadastrado com sucesso!");
    }

    //Metodo para pagina edição dos produtos
    public function editarView($id) {
        return view('produtos.edit', [
            'produto' => $this->getConceito($id)
        ]);
    }

    //Metodo para update dos produtos
    public function update(Request $request) {
        $produto = $this->getConceito($request->id);
        $produto->update($request->all());

        return redirect('/produtos');
    }

    //Metodo para chamar pagina excluir produtos
    public function excluirView($id) {
        return view('produtos.delete', [
            'produto' => $this->getConceito($id)
        ]);
    }

    //Metodo para exclusão dos produtos
    public function destroy($id) {
        $this->getConceito($id)->delete();

        return redirect(url('produtos'))->with('success', 'Excluído!');
    }

    //Metodo para proteger a entrada
    protected function getConceito($id) {
        return $this->produto->find($id);
    }

}

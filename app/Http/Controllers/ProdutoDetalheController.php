<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\ProdutoDetalhe;
use App\ItemDetalhe;

class ProdutoDetalheController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto_detalhe.create', ['unidades' => $unidades]);
    }


    public function store(Request $request)
    {
        ProdutoDetalhe::create($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $produtoDetalhe = ItemDetalhe::with(['item'])->find($id);
        $unidades = Unidade::all();
        return view('app.produto_detalhe.edit', ['produto_detalhe' => $produtoDetalhe, 'unidades' => $unidades]);
    }


    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {
        $produtoDetalhe->update($request->all());
        echo 'Dados atualizados com sucesso!';
    }


    public function destroy($id)
    {
        //
    }
}

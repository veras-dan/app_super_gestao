<?php

namespace App\Http\Controllers;

use App\Produto;
Use App\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(5);

        return view('app.produto.index', ['produtos' => $produtos, 'request' => $request->all() ]);
    }


    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto.create', ['unidades' => $unidades]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Produto $produto)
    {
        //
    }


    public function edit(Produto $produto)
    {
        //
    }


    public function update(Request $request, Produto $produto)
    {
        //
    }


    public function destroy(Produto $produto)
    {
        //
    }
}

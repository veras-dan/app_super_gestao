@extends('app.layouts.index')

@section('titulo', 'Fornecedor')
    
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.listar') }}">Voltar</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width:30%; margin-left:auto; margin-right:auto;">
                <form action="{{ route('app.fornecedor.adicionar') }}" method="post">

                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    @csrf
                    <input type="text" value="{{ $fornecedor->nome ?? old('nome') }}" name="nome" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input type="text" value="{{ $fornecedor->site ?? old('site') }}" name="site" placeholder="Site" class="borda-preta">
                        {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input type="text" value="{{ $fornecedor->telefone ?? old('telefone') }}" name="telefone" placeholder="Telefone" class="borda-preta">
                        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}

                    <input type="text" value="{{ $fornecedor->uf ?? old('uf') }}" name="uf" placeholder="UF" class="borda-preta">
                        {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                    <input type="text" value="{{ $fornecedor->email ?? old('email') }}" name="email" placeholder="Email" class="borda-preta">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                        
                    <button type="subimit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('app.layouts.index')

@section('titulo', 'Produto')
    
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar - Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left:auto; margin-right:auto;">
                <form action="" method="post">
                    @csrf
                    <input type="text" value="" name="nome" placeholder="Nome" class="borda-preta">
                        {{-- {{ $errors->has('nome') ? $errors->first('nome') : '' }} --}}

                    <input type="text" value="" name="descricao" placeholder="Descrição" class="borda-preta">
                        {{-- {{ $errors->has('site') ? $errors->first('site') : '' }} --}}

                    <input type="text" value="" name="peso"  placeholder="Peso" class="borda-preta">
                        {{-- {{ $errors->has('telefone') ? $errors->first('telefone') : '' }} --}}

                    <select name="unidade_id">
                        <option value="">-- Selecione uma unidade --</option>
                        <option value="1">Unidade</option>
                    </select>

                    <button type="subimit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
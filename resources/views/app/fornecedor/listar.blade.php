@extends('app.layouts.index')

@section('titulo', 'Fornecedor')
    
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <br>
        <div class="informacao-pagina">
            <div style="width:90%; margin-left:auto; margin-right:auto;">
                
                {{-- Tabela de listagem da pesquisa--}}
                <table border="1" width="100%">

                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>Telefone</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->telefone }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}"><span class="material-symbols-outlined edit-color">edit_square</span></a></td>
                                <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}"><span class="material-symbols-outlined del-color">delete</span></a></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Lista de produtos</p>
                                    <table border="1" style="margin: 20px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fornecedor->produtos as $key =>$produto)
                                                <tr>
                                                    <th>{{ $produto->id }}</th>
                                                    <th>{{ $produto->nome }}</th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                
                {{ $fornecedores->appends($request)->links() }}

                <br>

                Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} (de {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})
            </div>
        </div>
    </div>
@endsection
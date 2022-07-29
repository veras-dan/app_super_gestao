@if(isset($pedido->id))
    <form action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('pedido.store') }}" method="post">
        @csrf
@endif

    <select name="cliente_id">
        <option value="">-- Selecione um Cliente --</option>
        
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
        @endforeach

    </select>

    <input type="text" value="{{ $pedido->nome ?? old('nome') }}" name="nome" placeholder="Nome" class="borda-preta">
        {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}

    <button type="subimit" class="borda-preta">Cadastrar</button>
</form>
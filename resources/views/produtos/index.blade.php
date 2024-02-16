@extends('layouts.app')

@section('content')
    <div></div>
    <div class="container">
        <h1 class="mb-4">Medicamentos</h1>
        <form action="{{ route('produtos.index') }}" method="GET" class="form-inline mb-3">
            <div class="form-group mr-2">
                <label for="nome">Nome do Medicamento:</label>
                <input type="text" name="nome" id="nome" class="form-control ml-2" value="{{ request('nome') }}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este produto?')" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                        @if(session('success-' . $produto->id))
                        <div class="alert alert-success">
                            {{ session('success-' . $produto->id) }}
                        </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
            <h1 class="mb-4">Produtos</h1>
            <table class="table table-striped">
            </table>
            <a href="{{ route('produtos.create') }}" class="btn btn-success">Novo Produto</a>
        </div>
        <div class="container">
        <br>
            {{ $produtos->links() }}
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Medicamento</h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}">
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{ $produto->quantidade }}">
            </div>
            <div class="form-group">
                <label for="codigo_de_barras">Código de Barras:</label>
                <input type="text" class="form-control" id="codigo_de_barras" name="codigo_de_barras">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
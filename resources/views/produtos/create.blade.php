@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Medicamento</h1>
        <form method="POST" action="{{ route('produtos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Medicamento:</label>
                <input type="text" class="form-control" id="nome" name="nome">
                @error('nome')
                <span>{{'O campo Nome é obrigatorio'}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="preco">Preço do Medicamento:</label>
                <input type="text" class="form-control" id="preco" name="preco">
                @error('preco')
                <span>{{'O campo Preço do Medicamento é obrigatorio'}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade de Medicamento:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
                @error('quantidade')
                <span>{{'O campo Quantidade é obrigatorio'}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="codigo_de_barras">Código de Barras:</label>
                <input type="text" class="form-control" id="codigo_de_barras" name="codigo_de_barras">
                @error('codigo_de_barras')
                <span>{{'O campo Código de Barras é obrigatorio'}}</span>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn-primary">Adicionar Novo Medicamento</button>
        </form>
    </div>
@endsection

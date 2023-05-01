<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::where('nome', 'like', '%' . $request->nome . '%')->paginate(10);
        return view('produtos.index', compact('produtos'));
    }
    

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:50',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer'
        ]);

        $produto = Produto::create($request->all());

        return redirect()->route('produtos.index')
         ->with('success-' . $produto->id, 'Medicamento ' . $produto->nome . ' cadastrado com sucesso.');
    }


    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|max:50',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer'
        ]);

        $produto->update($request->all());

        return redirect()->route('produtos.index')
         ->with('success-' . $produto->id, 'Medicamento ' . $produto->nome . ' atualizado com sucesso.');
    


    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')
         ->with('success-' . $produto->id, 'Medicamento ' . $produto->nome . ' excluido com sucesso.');
    }

}
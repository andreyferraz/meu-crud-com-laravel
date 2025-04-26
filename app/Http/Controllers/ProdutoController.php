<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Importa o modelo Produto
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all(); // Busca todos os produtos do banco de dados
        return view('produtos.index', compact('produtos'));// Retorna a view 'produtos.index' com os produtos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create'); // Retorna a view 'produtos.create' para criar um novo produto
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário (opcional, mas recomendado)
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
        ]);

        Produto::create($request->all()); // Cria um novo produto com os dados do formulário
        return Redirect::route('produtos.index')->with('success', 'Produto criado com sucesso!'); // Redireciona para a lista com uma mensagem de sucesso

    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto')); // Retorna a view 'produtos.show' com os detalhes do produto
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto')); // Retorna a view 'produtos.edit' para editar o produto
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        // Validação dos dados do formulário (opcional, mas recomendado)
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
        ]);

        $produto->update($request->all()); // Atualiza o produto com os dados do formulário
        return Redirect::route('produtos.index')->with('success', 'Produto atualizado com sucesso!'); // Redireciona para a lista com uma mensagem de sucesso
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete(); // Exclui o produto
        return Redirect::route('produtos.index')->with('success', 'Produto excluído com sucesso!'); // Redireciona para a lista com uma mensagem de sucesso
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }

    public function show(Produto $produto)
    {
        return $produto;
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json($produto);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(null, 204);
    }
    public function getCategoria($categoria)
    {
        // Valida se a categoria é válida (lanche, bebida, doce)
        if (!in_array($categoria, ['lanche', 'bebida', 'doce'])) {
            return response()->json(['error' => 'Categoria inválida'], 400);
        }

        // Busca produtos pela categoria
        $produtos = Produto::where('categoria', $categoria)->get();
        return response()->json($produtos);
    }
}

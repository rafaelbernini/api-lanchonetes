<?php
namespace App\Http\Controllers;

use App\Models\Lanchonete;
use Illuminate\Http\Request;

class LanchoneteController extends Controller
{
    public function index()
    {
        return Lanchonete::with('produtos')->get();
    }

    public function store(Request $request)
    {
        $lanchonete = Lanchonete::create($request->all());
        return response()->json($lanchonete, 201);
    }

    public function show(Lanchonete $lanchonete)
    {
        return $lanchonete->load('produtos');
    }

    public function update(Request $request, Lanchonete $lanchonete)
    {
        $lanchonete->update($request->all());
        return response()->json($lanchonete);
    }

    public function destroy(Lanchonete $lanchonete)
    {
        $lanchonete->delete();
        return response()->json(null, 204);
    }


}

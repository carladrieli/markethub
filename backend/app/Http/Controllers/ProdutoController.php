<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return $produtos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return $produto;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        return $produto;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        return $produto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());

        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if($produto){
            $produto->delete();

            return response()->json([
                'status' => 200,
                'message' => "Produto excluído com sucesso"
            ],200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "Nenhum Produto encontrado"
            ],404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEstabelecimento;
use App\Http\Requests\StoreCategoriaEstabelecimentoRequest;
use App\Http\Requests\UpdateCategoriaEstabelecimentoRequest;

class CategoriaEstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categs = CategoriaEstabelecimento::all();
        return $categs;
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
    public function store(StoreCategoriaEstabelecimentoRequest $request)
    {
        $categ = CategoriaEstabelecimento::create($request->all());
        return $categ;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categ = CategoriaEstabelecimento::find($id);
        return $categ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categ = CategoriaEstabelecimento::find($id);
        return $categ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaEstabelecimentoRequest $request, int $id)
    {
        $categ = CategoriaEstabelecimento::find($id);
        $categ->update($request->all());

        return $categ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categ = CategoriaEstabelecimento::find($id);
        if($categ){
            $categ->delete();

            return response()->json([
                'status' => 200,
                'message' => "Categoria excluída com sucesso"
            ],200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "Nenhuma Categoria encontrada"
            ],404);
        }
    }
}

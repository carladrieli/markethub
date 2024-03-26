<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;

class EstabelecimentoController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estabelecimentos = Estabelecimento::all();
        return $estabelecimentos;
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
        $estabelecimento = Estabelecimento::create($request->all());
        return $estabelecimento;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        return $estabelecimento;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        return $estabelecimento;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->update($request->all());

        return $estabelecimento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        if($estabelecimento){
            $estabelecimento->delete();

            return response()->json([
                'status' => 200,
                'message' => "Estabelecimento excluído com sucesso"
            ],200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "Nenhum Estabelecimento encontrado"
            ],404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return $pedidos;
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
        $pedido = Pedido::create($request->all());
        return $pedido;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);
        return $pedido;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return $pedido;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $pedido = Pedido::find($id);
        $pedido->update($request->all());

        return $pedido;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        if($pedido){
            $pedido->delete();

            return response()->json([
                'status' => 200,
                'message' => "Pedido excluído com sucesso"
            ],200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "Nenhum Pedido encontrado"
            ],404);
        }
    }
}

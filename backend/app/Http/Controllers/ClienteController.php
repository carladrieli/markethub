<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return $clientes;
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
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'saldo' => 1000
        ]);
        return $cliente;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());

        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if($cliente){
            $cliente->delete();

            return response()->json([
                'status' => 200,
                'message' => "Cliente excluído com sucesso"
            ],200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "Nenhum Cliente encontrado"
            ],404);
        }
    }
}

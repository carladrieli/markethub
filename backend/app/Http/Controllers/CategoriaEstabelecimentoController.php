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
    public function show(CategoriaEstabelecimento $categoriaEstabelecimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaEstabelecimento $categoriaEstabelecimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaEstabelecimentoRequest $request, CategoriaEstabelecimento $categoriaEstabelecimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaEstabelecimento $categoriaEstabelecimento)
    {
        //
    }
}

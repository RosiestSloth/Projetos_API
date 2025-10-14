<?php

namespace App\Http\Controllers;

use App\Constants\Geral;
use App\Http\Requests\ApartamentoRequest;
use App\Services\ApartamentoService;
use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    protected $service;

    public function __construct(ApartamentoService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ApartamentoRequest $request)
    {
        $apartamento = $this->service->create($request);

        if($apartamento == true){
            return ['status' => true, 'message' => Geral::APARTAMENTO_CADASTRADO, 'apartamento' => $apartamento];
        } else {
            return ['status' => false, 'message' => Geral::APARTAMENTO_EXISTE, 'apartamento' => $apartamento];
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function list()
    {
        $apartamento = $this->service->list();

        return ['status' => true, 'message' => Geral::APARTAMENTO_ENCONTRADO, 'apartamento' => $apartamento];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $apartamento = $this->service->update($request, $id);

        return ['status' => true, 'message' => Geral::APARTAMENTO_ATUALIZADO, "apartamento" => $apartamento];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

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
    public function index(Request $request)
    {
        $apartamentos = $this->service->list($request);
        return ['status' => true, 'message' => Geral::APARTAMENTO_ENCONTRADO, 'apartamentos' => $apartamentos];
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
        // Mantido por compatibilidade com a rota existente
        $apartamento = $this->service->list(request());
        return ['status' => true, 'message' => Geral::APARTAMENTO_ENCONTRADO, 'apartamentos' => $apartamento];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apartamento = $this->service->show(request(), $id);
        return ['status' => true, 'message' => Geral::APARTAMENTO_ENCONTRADO, 'apartamento' => $apartamento];
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
        $this->service->delete(request(), $id);
        return ['status' => true, 'message' => 'Apartamento excluído com sucesso!'];
    }
}

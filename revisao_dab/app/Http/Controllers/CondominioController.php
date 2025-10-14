<?php

namespace App\Http\Controllers;

use App\Constants\Geral;
use App\Http\Requests\CondominioRequest;
use App\Services\CondominioService;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    protected $service;

    public function __construct(CondominioService $service)
    {
        $this->service = $service;
    }

    public function create(CondominioRequest $request)
    {
        $condominio = $this->service->create($request);

        return ['status' => true, 'message' => Geral::CONDOMINIO_CADASTRADO, 'condominio' => $condominio];
    }

    public function list(Request $request)
    {
        $condominio = $this->service->list($request);

        return ['status' => true, 'message' => Geral::CONDOMINIO_ENCONTRADO, 'condominio' => $condominio];
    }

    public function search(Request $request)
    {
        $condominio = $this->service->search($request);

        return ['status' => true, 'message' => Geral::CONDOMINIO_ENCONTRADO, 'condominio' => $condominio];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

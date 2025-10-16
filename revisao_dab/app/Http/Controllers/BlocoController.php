<?php

namespace App\Http\Controllers;

use App\Constants\Geral;
use App\Http\Requests\BlocoRequest;
use App\Services\BlocoService;
use Illuminate\Http\Request;

class BlocoController extends Controller
{
    protected $service;

    public function __construct(BlocoService $service)
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
    public function create(BlocoRequest $request)
    {
        $bloco = $this->service->create($request);

        if($bloco){
            return ['status' => true, 'message' => Geral::BLOCO_CADASTRADO, 'bloco' => $bloco];
        } else {
            return ['status' => false, 'message' => Geral::BLOCO_EXISTE, 'bloco' => $bloco];
        }


    }

    public function list(Request $request)
    {
        $bloco = $this->service->list($request);

        return ['status' => true, 'message' => Geral::BLOCO_ENCONTRADO, 'bloco' => $bloco];
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $bloco = $this->service->update($id, $request->all());
    return ['status' => true, 'message' => 'Bloco atualizado com sucesso!', 'bloco' => $bloco];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $this->service->delete($id);
    return ['status' => true, 'message' => 'Bloco deletado com sucesso!'];
    }
}

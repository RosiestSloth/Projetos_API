<?php

namespace App\Http\Controllers;

use App\Services\CidadeService;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    protected $service;

    public function __construct(CidadeService $service)
    {
        $this->service = $service;
    }

    public function selectPorEstado(Request $request, $codigo_uf)
    {
        $cidadePorEstado = $this->service->selectPorEstado($request, $codigo_uf);

        return ['status' => true, "cidades" => $cidadePorEstado];
    }

}

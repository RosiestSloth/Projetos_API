<?php

namespace App\Services;

use App\Repositories\EnderecoRepository;
use App\Models\Cidade;
use Illuminate\Http\Response;

class EnderecoService
{
    protected $repository;

    public function __construct(EnderecoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($request)
    {
        $data = $request->all();

        // Normalize cidade_id: prefer explicit cidade_id, otherwise try to resolve from 'cidade'
        if (empty($data['cidade_id']) && !empty($data['cidade'])) {
            $cidadeRaw = $data['cidade'];

            // if it's numeric, try as id first
            if (is_numeric($cidadeRaw)) {
                $cidade = Cidade::find((int)$cidadeRaw);
            } else {
                // try by codigo_municipio
                $cidade = Cidade::where('codigo_municipio', $cidadeRaw)->first();
                if (!$cidade) {
                    // try by nome (case-insensitive)
                    $cidade = Cidade::whereRaw('LOWER(nome) = ?', [strtolower($cidadeRaw)])->first();
                }
            }

            if ($cidade) {
                $data['cidade_id'] = $cidade->id ?? null;
            }
        }

        // if after normalization there's no cidade_id, throw a clear exception
        if (empty($data['cidade_id'])) {
            // Let validation layer handle it, but if we reach here, throw an exception
            abort(Response::HTTP_BAD_REQUEST, 'cidade_id inválida ou não encontrada. Envie cidade_id válido.');
        }

        return $this->repository->create($data);
    }

    public function show($id)
    {
        return $this->repository->findById($id);
    }
}


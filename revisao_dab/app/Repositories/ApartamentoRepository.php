<?php

namespace App\Repositories;

use App\Models\Apartamento;

class ApartamentoRepository
{
    public function find($id)
    {
        return Apartamento::find($id);
    }

    public function create($data)
    {
        return Apartamento::create([
            'numero' => $data['numero'],
            'bloco_id' => $data['bloco'],
            'user_morador' => $data['morador'],
            'user_proprietario' => $data['proprietario']
        ]);

    }

    public function list()
    {
        $query = $this->query();

        return $query->paginate(10);
    }

    private function query()
    {
        return Apartamento::with(
            'morador',
            'proprietario',
            'bloco.condominio.user',
            'bloco.condominio.endereco.cidade.estado'
        );
    }

    public function update()
    {
        //
    }
}


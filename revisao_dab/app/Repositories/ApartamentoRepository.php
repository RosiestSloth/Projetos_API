<?php

namespace App\Repositories;

use App\Models\Apartamento;
use Illuminate\Support\Facades\Auth;

class ApartamentoRepository
{
    public function find($id)
    {
        return Apartamento::find($id);
    }

    public function findWithRelations($id)
    {
        return $this->baseQuery()->where('id', $id)->first();
    }

    public function create($data)
    {
        $proprietario = $data['proprietario'] ?? Auth::id();
        $morador = $data['morador'] ?? null;

        return Apartamento::create([
            'numero' => $data['numero'],
            'bloco_id' => $data['bloco'],
            'user_morador' => $morador,
            'user_proprietario' => $proprietario
        ]);

    }

    public function listByOwner($ownerId)
    {
        $query = $this->baseQuery()->where('user_proprietario', $ownerId);

        return $query->paginate(10);
    }

    public function listAll()
    {
        return $this->baseQuery()->paginate(10);
    }

    private function baseQuery()
    {
        return Apartamento::with(
            'morador',
            'proprietario',
            'bloco.condominio.user',
            'bloco.condominio.endereco.cidade.estado'
        );
    }

    public function update($id, $data)
    {
        $apartamento = $this->find($id);
        if (!$apartamento) {
            abort(404, 'Apartamento não encontrado.');
        }

        $payload = [];
        if (isset($data['numero'])) $payload['numero'] = $data['numero'];
        if (isset($data['bloco'])) $payload['bloco_id'] = $data['bloco'];
        if (array_key_exists('morador', $data)) $payload['user_morador'] = $data['morador'];

        $apartamento->update($payload);

        return $this->findWithRelations($apartamento->id);
    }

    public function delete($id)
    {
        $apartamento = $this->find($id);
        if (!$apartamento) {
            abort(404, 'Apartamento não encontrado.');
        }
        return $apartamento->delete();
    }
}


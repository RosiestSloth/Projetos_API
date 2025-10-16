<?php

namespace App\Repositories;

use App\Models\Bloco;

class BlocoRepository
{
    public function create($data)
    {
        return Bloco::create([
            'bloco' => $data['bloco'],
            'descricao' => $data['descricao'],
            'condominio_id' => $data['condominio']
        ]);
    }

    public function list($isAdmin = false)
    {
        $query = $this->query(); // no owner constraint in schema; admin lists all already

        return $query->paginate(10);
    }

    public function findById($id)
    {
        return Bloco::with('condominio.user', 'condominio.endereco.cidade.estado')
            ->where('id', $id)
            ->whereNull('deleted_at')
            ->firstOrFail();
    }

    public function update($id, $data)
    {
        $bloco = Bloco::where('id', $id)->whereNull('deleted_at')->firstOrFail();
        if (isset($data['bloco'])) $bloco->bloco = $data['bloco'];
        if (isset($data['descricao'])) $bloco->descricao = $data['descricao'];
        if (isset($data['condominio'])) $bloco->condominio_id = $data['condominio'];
        $bloco->save();
        return $this->findById($id);
    }

    public function delete($id)
    {
        $bloco = Bloco::where('id', $id)->whereNull('deleted_at')->firstOrFail();
        $bloco->deleted_at = now()->toDateTimeString();
        $bloco->save();
        return true;
    }

    private function query()
    {
        return Bloco::with(
            'condominio.user',
            'condominio.endereco.cidade.estado'
        );
    }
}


<?php

namespace App\Constants;

class Geral
{

    // Usuário

    const USUARIO_DELETADO_INATIVO = 'Usuário foi deletado ou inativo!';
    const USUARIO_LOGADO = 'Usuário logado com sucesso!';
    const USUARIO_INCORRETO = 'Usuário ou senha estão incorretos!';
    const USUARIO_DESLOGADO = 'Usuário deslogado com sucesso!';
    const USUARIO_CADASTRADO = 'Usuário cadastrado com sucesso!';
    const USUARIO_ME = 'Usuário Logado!';
    const USUARIO_ENCONTRADO = 'Usuário encontrado!';
    const USUARIO_DELETADO = 'Usuário deletado com sucesso!';
    const USUARIO_SEM_PERMISSAO = 'Você não tem permissão para acessar esta funcionalidade.';

    // Endereço

    const ENDERECO_CADASTRADO = 'Endereço cadastrado com sucesso!';

    // Condominio

    const CONDOMINIO_CADASTRADO = 'Condomínio cadastrado com sucesso!';
    const CONDOMINIO_ENCONTRADO = 'Condomínio encontrado com sucesso!';

    // Bloco

    const BLOCO_CADASTRADO = 'Bloco cadastrado com sucesso!';
    const BLOCO_EXISTE = 'Este bloco já existe no condomínio especificado!';
    const BLOCO_ENCONTRADO = 'Bloco encontrado com sucesso!';

    // Apartamento

    const APARTAMENTO_CADASTRADO = 'Apartamento cadastrado com sucesso!';
    const APARTAMENTO_EXISTE = 'Este apartamento já existe no bloco especificado!';
    const APARTAMENTO_ENCONTRADO = 'Apartamento encontrado com sucesso!';
    const APARTAMENTO_ATUALIZADO = 'Apartamento atualizado com sucesso!';
}

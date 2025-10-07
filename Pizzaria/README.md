# Pizzaria (API)

API simples para gerenciar pizzas, usuários e pedidos — projeto didático para demonstrar regras de negócio e boas práticas.

## Resumo

Projeto Laravel que implementa:

- Gestão de pizzas (CRUD)
- Gestão de usuários
- Pedidos compostos por 1 ou mais items (cada item = uma pizza + extras)
- Cálculo automático do valor total do pedido

O foco foi aplicar responsabilidade única e regras de negócio no backend.

## Requisitos

- PHP 8.x
- Composer
- MySQL (ou ajuste `.env` para SQLite)

## Instalação rápida

No Windows Powershell, na raiz do projeto (`Pizzaria`):

```pwsh
cd 'C:\caminho\para\Pizzaria'
composer install
cp .env.example .env    # ajuste valores de DB no .env
php artisan key:generate
```

Configure em `.env` as variáveis do banco de dados (`DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

## Migrations e Seeders

Rode as migrations e seeders:

```pwsh
php artisan migrate --force
php artisan db:seed
```

Seeders relevantes:

- `UserSeeder` — cria usuários de exemplo
- `PizzaSeeder` — cria pizzas de exemplo
- `PedidoSeeder` — cria pedidos de exemplo (agora usa items)
- `MigratePedidosToItemsSeeder` — converte pedidos antigos (com `pizza_id`) para o novo formato com `pedido_items` (executado manualmente quando necessário)

Se quiser rodar apenas um seeder:

```pwsh
php artisan db:seed --class=PedidoSeeder
```

## Endpoints principais (routes/api.php)

As rotas seguem um padrão REST simples:

- GET /api/users
- GET /api/users/{user}
- POST /api/users
- PUT /api/users/{user}
- DELETE /api/users/{user}

- GET /api/pizzas
- GET /api/pizzas/{pizza}
- POST /api/pizzas
- PUT /api/pizzas/{pizza}
- DELETE /api/pizzas/{pizza}

- GET /api/pedidos
- GET /api/pedidos/{pedido}
- POST /api/pedidos
- PUT /api/pedidos/{pedido}
- DELETE /api/pedidos/{pedido}

> Observação: não existe autenticação ativa obrigatória por padrão. Recomenda-se proteger as rotas com `auth:sanctum` e aplicar policies.

### Exemplo de payload para criar um pedido

```json
{
  "user_id": 2,
  "items": [
    { "pizza_id": 1, "quantidade": 1, "ingredientes_extras": ["Cheddar"] },
    { "pizza_id": 3, "quantidade": 2 }
  ]
}
```

O controller calcula automaticamente o preço unitário de cada item como: preco_base + (R$5 × número de extras), e o `preco_total` do item é `preco_unitario × quantidade`. O `valor_total` do pedido é a soma dos `preco_total` dos items.

## Regras de negócio implementadas

1. Um pedido deve ter pelo menos 1 pizza — validado em `PedidoRequest` (`items` é obrigatório e deve ter ao menos 1 item).
2. Cada pizza pode ter ingredientes extras (opcional). Extras afetam o preço.
3. O sistema calcula o valor total do pedido automaticamente (o cliente/cliente não envia `valor_total`).
4. A modelagem agora suporta múltiplos itens por pedido (`pedido_items`), cada item guarda `ingredientes_extras`, `preco_unitario` e `preco_total`.

Nota sobre permissões (ainda a implementar totalmente):

- A regra "Apenas funcionários podem cadastrar/editar/excluir pizzas" não foi aplicada via policy/middleware automaticamente — o projeto recomenda proteger rotas com `auth` e criar uma `PizzaPolicy` ou checar `user->tipo` nas rotas. Posso adicionar isso se desejar.

## Observações técnicas e próximos passos sugeridos

- O valor do extra por ingrediente está hardcoded como R$5 no controller/seeders. Recomendo mover para `config/pizzaria.php` para facilitar alteração.
- Recomendado implementar autenticação (Sanctum) e policies para Pizzas.
- Após migrar todos os pedidos para `pedido_items`, considerar remover a coluna legada `pizza_id` da tabela `pedidos` em uma migration separada.
- Adicionar testes (Feature/Unit) para endpoints de pedidos e validações.

## Comandos úteis

Rodar servidor local:

```pwsh
php artisan serve
```

Rodar testes (se houver):

```pwsh
php artisan test
```

Rodar lint/checks (dependendo da sua configuração):

```pwsh
# php -l para checar sintaxe de arquivos específicos
php -l app/Http/Controllers/Api/PedidoController.php
```

## Contribuindo

1. Abra uma issue descrevendo a mudança.
2. Faça uma branch com um nome descritivo.
3. Crie PR com testes quando possível.

---

Se quiser, eu:

- A) implemento autenticação e `PizzaPolicy` agora;
- B) movo o valor do extra para `config/pizzaria.php`;
- C) removo a coluna `pizza_id` em uma migration (após confirmação que migração foi feita);
- D) crio testes básicos para pedidos.

Diga qual desses prefere e eu executo. 

<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Pedido;

$pedidos = Pedido::with(['user','items.pizza'])->get();

echo json_encode($pedidos->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

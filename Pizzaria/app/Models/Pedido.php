<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Pizza;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PedidoItem;

class Pedido extends Model
{
    protected $fillable = [
        'user_id',
        'valor_total',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pizza(): BelongsTo
    {
        return $this->belongsTo(Pizza::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(PedidoItem::class);
    }

    public function recalculateTotal(): float
    {
        $total = 0.0;
        foreach ($this->items as $item) {
            $total += floatval($item->preco_total);
        }

        $this->valor_total = $total;
        $this->save();

        return $total;
    }
}

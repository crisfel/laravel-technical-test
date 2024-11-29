<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethodOption extends Model
{
    public function PaymentMethod(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}

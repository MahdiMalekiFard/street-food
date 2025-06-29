<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Base;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasBase
{
    public function base(): BelongsTo
    {
        return $this->belongsTo(Base::class);
    }
}

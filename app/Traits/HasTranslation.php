<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Translation;

trait HasTranslation
{
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translatable')
            ->where('locale', app()->getLocale());
    }
}

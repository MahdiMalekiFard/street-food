<?php

declare(strict_types=1);

namespace App\Services\AdvancedSearchFields\Handlers;

class UserHandler extends BaseHandler
{
    public function handle(): array
    {
        return [
            $this->add('id', __('validation.attributes.id'), self::NUMBER),
            $this->add('mobile', __('validation.attributes.mobile'), self::INPUT),
            $this->add('name', __('validation.attributes.full_name'), self::INPUT),
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\Actions\Slider;

use App\Models\Slider;
use App\Repositories\Slider\SliderRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class ToggleSliderAction
{
    use AsAction;

    public function __construct(private readonly SliderRepositoryInterface $repository)
    {
    }

    /**
     * @throws Throwable
     */
    public function handle($slider): Slider
    {
        return DB::transaction(function () use ($slider) {
            /** @var Slider $slider */
            $slider = $this->repository->toggle($slider);

            return $slider->refresh();
        });
    }
}

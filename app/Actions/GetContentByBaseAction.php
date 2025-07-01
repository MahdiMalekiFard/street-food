<?php

namespace App\Actions;

use App\Enums\BooleanEnum;
use App\Enums\PageTypeEnum;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\Menu\MenuRepositoryInterface;
use App\Repositories\Opinion\OpinionRepositoryInterface;
use App\Repositories\Page\PageRepositoryInterface;
use App\Repositories\Portfolio\PortfolioRepositoryInterface;
use App\Repositories\Slider\SliderRepositoryInterface;
use Illuminate\View\View;
use Lorisleiva\Actions\Concerns\AsAction;

class GetContentByBaseAction
{
    use AsAction;

    public function __construct(
        private readonly BlogRepositoryInterface $blogRepository,
        private readonly MenuRepositoryInterface $menuRepository,
        private readonly SliderRepositoryInterface $sliderRepository,
        private readonly PageRepositoryInterface $pageRepository,
        private readonly OpinionRepositoryInterface $opinionRepository,
        private readonly PortfolioRepositoryInterface $portfolioRepository,
    )
    {
    }

    public function handle($base_id): View
    {
        $blogs = $this->blogRepository->get(['limit' => 6, 'published' => BooleanEnum::ENABLE]);
        $menus = $this->menuRepository->query(['limit' => 4, 'published' => BooleanEnum::ENABLE])->where('base_id', $base_id)->get();
        $sliders = $this->sliderRepository->query()->where('base_id', $base_id)->get();
        $about = $this->pageRepository->query()->where('type', PageTypeEnum::ABOUT_US)->first();
        $opinions = $this->opinionRepository->get(['limit' => 4, 'published' => BooleanEnum::ENABLE]);
        $portfolios = $this->portfolioRepository->query(['limit' => 4, 'published' => BooleanEnum::ENABLE])->where('base_id', $base_id)->get();

        return view('web.home', [
            'menus'      => $menus,
            'sliders'    => $sliders,
            'about_page' => $about,
            'opinions'   => $opinions,
            'blogs'      => $blogs,
            'portfolios' => $portfolios
        ]);
    }
}

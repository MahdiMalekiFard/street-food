@php @endphp
@extends('web.layout.main')

@section('content')
    <section class="s-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">{{ trans('base.title') }}</h3>
                        <p class="text" data-aos-duration="1000" data-aos="fade-up">{{ trans('base.text') }}</p>
                    </div>
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">
                            @foreach($bases as $base)
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <a href="{{ route('home-by-base', ['locale' => app()->getLocale(), 'base' => $base->slug]) }}">
                                                    <img src="{{ $base?->getFirstMediaUrl('image') ?? '#' }}" alt="">
                                                </a>
                                            </div>
                                            <a href="{{ route('home-by-base', ['locale' => app()->getLocale(), 'base' => $base->slug]) }}" class="h5 title">{{ $base?->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Navigation arrows -->
                        <div class="swiper-button-next" style="margin-top: 40px;"></div>
                        <div class="swiper-button-prev" style="margin-top: 40px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

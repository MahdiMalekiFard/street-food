@php @endphp
@extends('web.layout.main')

@section('content')
    <section class="s-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Choose Your base categories</h3>
                        <p class="text" data-aos-duration="1000" data-aos="fade-up">these categories have different contents</p>
                    </div>
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">
                            @foreach($bases as $base)
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="{{ $base?->getFirstMediaUrl('image') ?? '#' }}" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>{{ $base?->updated_at->format('y') }}</h4>
                                                <p>{{ $base?->updated_at->format('M d') }}</p>
                                            </div>
                                            <a href="{{ route('home-by-base', ['locale' => app()->getLocale(), 'base' => $base->slug]) }}" class="h5 title">{{ $base?->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

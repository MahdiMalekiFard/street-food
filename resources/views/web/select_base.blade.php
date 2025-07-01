@php @endphp
@extends('web.layout.main')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Choose your base</h2>
        <div class="row">
            @foreach($bases as $base)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ $base?->getFirstMediaUrl() }}" class="card-img-top" alt="{{ $base->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $base->title }}</h5>
                            <p class="card-text">{{ $base->description }}</p>
                            <a href="{{ route('home-by-base', ['locale' => app()->getLocale(), 'base_id' => $base->id]) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

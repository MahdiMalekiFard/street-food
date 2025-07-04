@props([
    'title'=>null,
    'stack'=>[]
])
@section('title',$title)

<!--begin::Page title-->
<div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        {{@$title}}
    </h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{route('admin.index')}}" @conditionalNavigate(wire:navigate) class="text-muted text-hover-primary">{{trans('dashboard.model')}} </a>
        </li>
        @if(count($stack))
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-500 w-5px h-2px"></span>
            </li>
        @endif
        @foreach($stack as $key=>$value)
            <li class="breadcrumb-item text-muted">
                <a href="{{$value}}" @conditionalNavigate(wire:navigate) class="text-muted text-hover-primary">{{$key}} </a>
            </li>
            @if(!$loop->last)
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
            @endif
        @endforeach

    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->
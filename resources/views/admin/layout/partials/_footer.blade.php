@php use App\Enums\RoleEnum; @endphp
    <!--begin::Footer-->
<div id="kt_app_footer" class="app-footer ">
    <!--begin::Footer container-->
    <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
        <!--begin::Copyright-->
        <div class="text-gray-900 order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2025&copy;</span>
            <a href="https://metanext.biz" target="_blank" class="text-gray-800 text-hover-primary">Metanext</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            @role(RoleEnum::ADMIN->value)
{{--            <li class="menu-item"><a href="/api/documentation" target="_blank" class="menu-link px-2">Api Docs</a></li>--}}
{{--            <li class="menu-item"><a href="/documents" target="_blank" class="menu-link px-2">Developer Docs</a></li>--}}
{{--            <li class="menu-item"><a href="/telescope" target="_blank" class="menu-link px-2">Telescope</a></li>--}}
            @endif

        </ul>
        <!--end::Menu-->        </div>
    <!--end::Footer container-->
</div>
<!--end::Footer-->
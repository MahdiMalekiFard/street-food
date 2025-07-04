<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Search-->
    @if(false)
        <div class="app-navbar-item align-items-stretch ms-1 ms-md-4">
            @include('admin.partials.search._dropdown')
        </div>
    @endif
    <!--end::Search-->
    <!--begin::Activities-->
    @if(false)
        <div class="app-navbar-item ms-1 ms-md-4">
            <!--begin::Drawer toggle-->
            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" id="kt_activities_toggle">
                <i class="ki-solid ki-messages fs-2"></i></div>
            <!--end::Drawer toggle-->
        </div>
    @endif
    <!--end::Activities-->
    <!--begin::Notifications-->
    @if(false)
        <div class="app-navbar-item ms-1 ms-md-4">
            <!--begin::Menu- wrapper-->
            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                <i class="ki-solid ki-notification-status fs-2"></i></div>
            @include('admin.partials.menus._notifications-menu')
            <!--end::Menu wrapper-->
        </div>
    @endif
    <!--end::Notifications-->
    <!--begin::Chat-->
    @if(false)
        <div class="app-navbar-item ms-1 ms-md-4">
            <!--begin::Menu wrapper-->
            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle">
                <i class="ki-solid ki-message-text-2 fs-2"></i>
                <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
            </div>
            <!--end::Menu wrapper-->
        </div>
    @endif
    <!--end::Chat-->
    <!--begin::My apps links-->
   @if(false)
        <div class="app-navbar-item ms-1 ms-md-4">
            <!--begin::Menu wrapper-->
            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <i class="ki-solid ki-element-11 fs-2"></i></div>
            @include('admin.partials.menus._my-apps-menu')
            <!--end::Menu wrapper-->
        </div>
   @endif
    <!--end::My apps links-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px"
             data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
             data-kt-menu-attach="parent"
             data-kt-menu-placement="bottom-start">
            <img src="{{$currentUser->getFirstMediaUrl('avatar','512')}}" class="rounded-3" alt="user"/>
        </div>
        @include('admin.partials.menus._user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    @if(false)
        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                <i class="ki-solid ki-element-4 fs-1"></i></div>
        </div>
    @endif
    <!--end::Header menu toggle-->
    <!--begin::Aside toggle-->
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
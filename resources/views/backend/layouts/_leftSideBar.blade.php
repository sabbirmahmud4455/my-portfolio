<!--begin::Aside Toolbarl-->
<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
    <!--begin::Aside user-->
    <!--begin::User-->
    <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px">
            @if(auth('web')->check())
                <img src="{{ auth('web')->user()->image ? asset('images/profile/'.auth('web')->user()->image) : asset('images/profile/user.png')  }}" width="300px;" height="300px;" alt="" />
            @endif
        </div>
        <!--end::Symbol-->
        <!--begin::Wrapper-->
        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
            <!--begin::Section-->
            <div class="d-flex">
                <!--begin::Info-->
                <div class="flex-grow-1 me-2">
                    <!--begin::Username-->
                    <a href="{{ route('profile.index', ['id' => encrypt(auth('web')->user()->id), 'email' => encrypt(auth('web')->user()->email)]) }}" class="text-white text-hover-primary fs-6 fw-bold">{{ auth('web')->user()->name }}</a>
                    <!--end::Username-->
                    <!--begin::Description-->
                    {{--<span class="text-gray-600 fw-semibold d-block fs-8 mb-1">Python Dev</span>--}}
                    <!--end::Description-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center text-success fs-9">
                        <span class="bullet bullet-dot bg-success me-1"></span>online</div>
                    <!--end::Label-->
                </div>
                <!--end::Info-->
                <!--begin::User menu-->
                <div class="me-n2">
                    <!--begin::Action-->
                    <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                        <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
                                <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ auth('web')->user()->image ? asset('images/profile/'.auth('web')->user()->image) : asset('images/profile/user.png')  }}" width="300px;" height="300px;" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">@if(auth('web')->check()) {{ auth('web')->user()->name }} @endif
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"></span></div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">@if(auth('web')->check()) {{ auth('web')->user()->email }} @endif</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="{{ route('profile.index', ['id' => encrypt(auth('web')->user()->id), 'email' => encrypt(auth('web')->user()->email)]) }}" class="menu-link px-5">Account Settings</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('logout.index') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                            <form action="{{ route('logout.index') }}" id="logout-form" method="post" style="display: none">
                                @csrf
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Action-->
                </div>
                <!--end::User menu-->
            </div>
            <!--end::Section-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::User-->
    <!--end::Aside user-->
</div>
<!--end::Aside Toolbarl-->
<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item @if( Route::currentRouteName() == 'dashboard' ) here @endif show">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('dashboard') }}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->


            @if(auth('web')->check() && auth('web')->user()->is_super_admin == true)
                @foreach( App\Models\UserModule\Module::orderBy('position', 'asc')->get() as $module )
                    @if($module->route == null)
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion
                            @foreach($module->sub_module->sortBy('position', true) as $sub_moduel)
                                @if(Route::currentRouteName() == $sub_moduel->route) here show @endif
                            @endforeach
                          ">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Icon-->
                                    <i class="{{ $module->icon }}"></i>
                                    <!--end::Icon-->
                                </span>
                                <span class="menu-title">{{ $module->name }}</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            @foreach($module->sub_module->sortBy('position', true) as $sub_moduel)
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion @if(Route::currentRouteName() == $sub_moduel->route) show @endif">

                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Route::currentRouteName() == $sub_moduel->route) active @endif" href="{{ route($sub_moduel->route) }}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ $sub_moduel->name }}</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            @endforeach
                        </div>
                        <!--end:Menu item-->
                    @else

                        <!--begin:Menu item-->
                        <div class="menu-item @if( Route::currentRouteName() == $module->route ) here @endif show">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route($module->route) }}">
                                <span class="menu-icon">
                                    <!--begin::Icon-->
                                    <i class="{{ $module->icon }}"></i>
                                    <!--end::Icon-->
                                </span>
                                <span class="menu-title">{{ $module->name }}</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                    @endif
                @endforeach

            @elseif(auth('web')->check() && auth('web')->user()->is_super_admin == false)
                @foreach( App\Models\UserModule\Module::orderBy('position', 'asc')->get() as $module )
                    @if( can($module->key) )
                        @if($module->route == null)
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion
                            @foreach($module->sub_module->sortBy('position', true) as $sub_moduel)
                                @if(Route::currentRouteName() == $sub_moduel->route) here show @endif
                            @endforeach
                            ">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Icon-->
                                        <i class="{{ $module->icon }}"></i>
                                        <!--end::Icon-->
                                    </span>
                                    <span class="menu-title">{{ $module->name }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                @foreach($module->sub_module->sortBy('position', true) as $sub_moduel)
                                    @if(can($sub_moduel->key))
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">

                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link @if(Route::currentRouteName() == $sub_moduel->route) active @endif" href="{{ route($sub_moduel->route) }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                    <span class="menu-title">{{ $sub_moduel->name }}</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    @endif
                                @endforeach
                            </div>
                            <!--end:Menu item-->
                        @else

                            <!--begin:Menu item-->
                            <div class="menu-item @if( Route::currentRouteName() == $module->route ) here @endif show">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="{{ route($module->route) }}">
                                    <span class="menu-icon">
                                        <!--begin::Icon-->
                                        <i class="{{ $module->icon }}"></i>
                                        <!--end::Icon-->
                                    </span>
                                    <span class="menu-title">{{ $module->name }}</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->

                        @endif
                    @endif
                @endforeach
            @endif


        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
<!--begin::Footer-->
<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
    <a href="https://rpaisolutions.com/" target="_blank" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Your Intelligent Assistant!">
        <span class="btn-label">RP A! Solutions</span>
        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
        <span class="svg-icon btn-icon svg-icon-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </a>
</div>
<!--end::Footer-->

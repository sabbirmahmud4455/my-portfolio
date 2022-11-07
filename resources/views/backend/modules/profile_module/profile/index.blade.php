@extends('backend.layouts.master')

@section('per_page_css')
    <!--DataTable-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/datatable/jquery.dataTables.min.css') }}" type="text/css">
    <!--DataTable-->
    <style>
        th, td {
            padding: 10px !important;
        }
        .password-box {
            position: relative;
        }
    </style>
@endsection
@section('breadcrumb')
    <!--begin::Title-->
    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Account Settings</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Account</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Settings</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')

    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{ auth('web')->user()->image ? asset('images/profile/'.auth('web')->user()->image) : asset('images/profile/user.png')  }}" width="300px;" height="300px;" alt="image" />
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $user->name }}</a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                            <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                            <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    {{ $user->role->name }}
                                </a>

                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    {{ $user->email }}
                                </a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div class="collapse show">
            <!--begin::Form-->
            <form action="{{ route('profile.update', ['id' => encrypt($user->id), 'email' => encrypt($user->email)]) }}" class="form ajax-form" autocomplete="off" method="post" enctype="multipart/form-data">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('backend/assets/media/svg/avatars/blank.svg') }}')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ auth('web')->user()->image ? asset('images/profile/'.auth('web')->user()->image) : asset('images/profile/user.png')  }}')"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{ $user->name }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Contact Phone</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{ $user->phone }}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary" id="">Save Changes</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <!--begin::Sign-in Method-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Sign-in Method</h3>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Email Address-->
                <div class="d-flex flex-wrap align-items-center">
                    <!--begin::Label-->
                    <div id="old-email">
                        <div class="fs-6 fw-bold mb-1">Email Address</div>
                        <div class="fw-semibold text-gray-600">{{ $user->email }}</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Edit-->
                    <div id="edit-email" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form action="{{ route('profile.email.update', ['id' => encrypt($user->id), 'email' => encrypt($user->email)]) }}" class="form ajax-form" novalidate="novalidate" autocomplete="off" method="post">
                            @csrf
                            <div class="row mb-6">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0">
                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="email" value="{{ $user->email }}" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0 password-box">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="password" id="confirmemailpassword" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" style="top: 54px !important;">
                                            <i class="bi bi-eye-slash fs-2 password-eye-slash"></i>
                                            <i class="bi bi-eye fs-2 d-none password-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary me-2 px-6">Update Email</button>
                                <button id="email-cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->
                    <!--begin::Action-->
                    <div id="change-email" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Change Email</button>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Email Address-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Password-->
                <div class="d-flex flex-wrap align-items-center mb-10">
                    <!--begin::Label-->
                    <div id="old-password">
                        <div class="fs-6 fw-bold mb-1">Password</div>
                        <div class="fw-semibold text-gray-600">************</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Edit-->
                    <div id="password-edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form action="{{ route('profile.password.update', ['id' => encrypt($user->id), 'email' => encrypt($user->email)]) }}" class="form ajax-form" novalidate="novalidate" autocomplete="off" method="post">
                            @csrf
                            <div class="row mb-1">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 password-box">
                                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="current_password" id="current_password" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" style="top: 54px !important;">
                                            <i class="bi bi-eye-slash fs-2 current-password-eye-slash"></i>
                                            <i class="bi bi-eye fs-2 d-none current-password-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 password-box">
                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="password" id="password" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" style="top: 54px !important;">
                                            <i class="bi bi-eye-slash fs-2 new-password-eye-slash"></i>
                                            <i class="bi bi-eye fs-2 d-none new-password-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 password-box">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" id="password-field" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" style="top: 54px !important;">
                                            <i class="bi bi-eye-slash fs-2 confirm-password-eye-slash"></i>
                                            <i class="bi bi-eye fs-2 d-none confirm-password-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-text mb-5">Password must be at least 6 character</div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary me-2 px-6">Update Password</button>
                                <button id="password-cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->
                    <!--begin::Action-->
                    <div id="reset-password" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Password-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Sign-in Method-->

@endsection



@section('per_page_js')

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('backend/assets/js/custom-script.min.js') }}"></script>
    <!--end::Custom Javascript-->

    <!--DataTable-->
    <script src="{{ asset('backend/assets/js/datatable/jquery.dataTables.min.js') }}"></script>
    <!--DataTable-->

    <!--start::ajax form submit-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script>
    <!--end::ajax form submit-->

    <script>
        //Change Email Address
        $(document).ready(() => {
            $('#change-email button').on('click', () => {

                $('#edit-email').removeClass('d-none');
                $('#old-email, #change-email').addClass('d-none');
            });
        });

        $(document).ready(() => {
            $('#email-cancel').on('click', () => {

                $('#edit-email').addClass('d-none');
                $('#old-email, #change-email').removeClass('d-none');
            });
        });
        //Change Email Address

        //Change Password
        $(document).ready(() => {
            $('#reset-password button').on('click', () => {

                $('#password-edit').removeClass('d-none');
                $('#old-password, #reset-password').addClass('d-none');
            });
        });

        $(document).ready(() => {
            $('#password-cancel').on('click', () => {

                $('#password-edit').addClass('d-none');
                $('#old-password, #reset-password').removeClass('d-none');
            });
        });
        //Change Password
    </script>

    <!-- show hide password -->
    <script>
        $('.password-eye-slash').on('click', () => {
            $('#confirmemailpassword').attr('type', 'text');
            $('.password-eye').removeClass('d-none');
            $('.password-eye-slash').addClass('d-none');
        });
        $('.password-eye').on('click', () => {
            $('#confirmemailpassword').attr('type', 'password');
            $('.password-eye').addClass('d-none');
            $('.password-eye-slash').removeClass('d-none');
        });
    </script>

    <script>
        $('.current-password-eye-slash').on('click', () => {
            $('input[name="current_password"]').attr('type', 'text');
            $('.current-password-eye').removeClass('d-none');
            $('.current-password-eye-slash').addClass('d-none');
        });
        $('.current-password-eye').on('click', () => {
            $('input[name="current_password"]').attr('type', 'password');
            $('.current-password-eye').addClass('d-none');
            $('.current-password-eye-slash').removeClass('d-none');
        });
    </script>

    <script>
        $('.new-password-eye-slash').on('click', () => {
            $('#password').attr('type', 'text');
            $('.new-password-eye').removeClass('d-none');
            $('.new-password-eye-slash').addClass('d-none');
        });
        $('.new-password-eye').on('click', () => {
            $('#password').attr('type', 'password');
            $('.new-password-eye').addClass('d-none');
            $('.new-password-eye-slash').removeClass('d-none');
        });
    </script>

    <script>
        $('.confirm-password-eye-slash').on('click', () => {
            $('input[name="password_confirmation"]').attr('type', 'text');
            $('.confirm-password-eye').removeClass('d-none');
            $('.confirm-password-eye-slash').addClass('d-none');
        });
        $('.confirm-password-eye').on('click', () => {
            $('input[name="password_confirmation"]').attr('type', 'password');
            $('.confirm-password-eye').addClass('d-none');
            $('.confirm-password-eye-slash').removeClass('d-none');
        });
    </script>
    <!-- show hide password -->


@endsection

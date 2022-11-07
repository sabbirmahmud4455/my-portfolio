@extends('backend.layouts.master')

@section('breadcrumb')
    <!--begin::Title-->
    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Role Management</h1>
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
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('role.index') }}" class="text-muted text-hover-primary">Roles</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">New Role</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    <!--begin::Tables Widget 11-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Add New Role</span>
                <span class="text-muted mt-1 fw-semibold fs-7"></span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Form-->
                    <form class="form ajax-form" action="{{ route('role.add') }}" autocomplete="off" method="post">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" >
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2 required">Role Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="Enter a Role name" name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Label-->
                            <label class="fs-5 fw-bold form-label mb-3">Role Permissions</label>
                            <!--end::Label-->


                            @foreach($modules as $key=>$module)
                                @foreach($module->permission as $key=>$module_permission)
                                    @if($module->key == $module_permission->key)
                                        <div class="card m-2" style="border: 1px solid #B8B8B8">
                                            <!--begin::Permissions-->
                                            <div class="col-md-12">
                                                <div class="fv-row p-3 permission-block">
                                                    <!--begin:: Role Permission-->
                                                    <div class="card-header">
                                                        <div class="d-flex fv-row">
                                                            <div class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input module-check" name="permission[]" id="module_{{ $module->key }}" type="checkbox" value="{{ $module_permission->id }}">
                                                                <label class="form-check-label" for="module_{{ $module->key }}">
                                                                    <div class="fw-bold text-gray-800">{{ $module->name }}</div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-md-12 sub-module-block">
                                                            <!--begin::Wrapper-->
                                                            <ul>
                                                                <div class="row">
                                                                    @foreach($module->permission as $key=>$sub_module_permission)
                                                                        @if($module->key != $sub_module_permission->key)
                                                                            <div class="col-md-4 p-2">
                                                                                <!--begin::Checkbox-->
                                                                                <label class="form-check form-switch form-check-custom form-check-solid me-2">
                                                                                    <input class="form-check-input sub-module-check" type="checkbox" value="{{ $sub_module_permission->id }}" name="permission[]" disabled />
                                                                                    <span class="form-check-label">{{ $sub_module_permission->display_name }}</span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </ul>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    </div>
                                                    <!--end:: Role Permission-->
                                                </div>
                                            </div>
                                            <!--end::Permissions-->
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="float-end pt-15">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->


@endsection

@section('per_page_js')
    <script>
        $('.module-check').click(function(e) {
            let $this = $(this);
            if (e.target.checked == true) {
                $this.closest('.permission-block').find('.sub-module-block').find('.sub-module-check').removeAttr('disabled');
            } else {
                $this.closest('.permission-block').find('.sub-module-block').find('.sub-module-check').attr('disabled', 'disabled');
            }
        });
    </script>

    <!--start::ajax form submit-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script>
    <!--end::ajax form submit-->

@endsection


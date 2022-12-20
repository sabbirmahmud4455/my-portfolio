@extends('backend.layouts.master')

@section('per_page_css')

@endsection
@section('breadcrumb')
    <!--begin::Title-->
    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">App Information</h1>
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
        <li class="breadcrumb-item text-muted">Settings</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">App Info</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')

    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Update App Information</h2>
            </div>
        </div>
        <!--end::Card header-->
        <form class="ajax-form" action="{{ route('app.info.update', ['id' => encrypt($app_info->id)]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="row">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row col-md-6">
                        <!--begin::Label-->
                        <label class="required form-label">Title</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="title" class="form-control mb-2" placeholder="Title" value="{{ $app_info->title }}" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row col-md-6">
                        <!--begin::Label-->
                        <label class="required form-label">URL</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="url" class="form-control mb-2" placeholder="URL have to be start with https://" value="{{ $app_info->url }}" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row col-md-12 form-group">
                        <!--begin::Label-->
                        <label class="form-label required">Description</label>
                        <!--end::Label-->
                        <!--begin::Editor-->
                        <textarea name="description" id="description" class="form-control" rows="3">{{ $app_info->description }}</textarea>
                        <!--end::Editor-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="col-md-6 form-group">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold fs-6">Logo</label>
                        <!--end::Label-->
                        <div class="form-control text-center">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('images/info/logo-placeholder.png') }}'); background-size: contain;">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-md-400px h-125px" style="background-image: url('{{ asset('images/info/'.$app_info->logo)  }}'); background-size: contain;"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="logo" />
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
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="col-md-6 form-group">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold fs-6">Favicon</label>
                        <!--end::Label-->
                        <div class="form-control text-center">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('images/info/icon-placeholder.png') }}'); background-size: contain;">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-md-400px h-125px" style="background-image: url('{{ asset('images/info/'.$app_info->favicon)  }}'); background-size: contain;" ></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="favicon" />
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
                    </div>
                    <!--end::Input group-->
                </div>
            </div>
            <!--end::Card Body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
            </div>
            <!--end::Actions-->
        </form>
    </div>

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

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="{{ asset('backend/js/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>



@endsection

@extends('backend.layouts.master')

@section('per_page_css')
    <!--DataTable-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/datatable/jquery.dataTables.min.css') }}" type="text/css">
    <!--DataTable-->
    <style>
        th, td {
            padding: 10px !important;
        }
    </style>
@endsection
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
        <li class="breadcrumb-item text-muted">Roles</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    <!--begin::Tables Widget 11-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1"></span>
                <span class="text-muted mt-1 fw-semibold fs-7"></span>
            </h3>
            <div class="card-toolbar">
                @if(can('add_role'))
                    <a href="{{ route('role.add.page') }}" class="btn btn-sm btn-light-primary">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                  rx="1" transform="rotate(-90 11.364 20.364)"
                                  fill="currentColor"/>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                  fill="currentColor"/>
                        </svg>
                    </span>
                        <!--end::Svg Icon-->New Role</a>
                @endif
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-bordered dataTable display datatable-data" id="datatable">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->


@endsection



@section('per_page_js')

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('backend/assets/js/custom-script.min.js') }}"></script>
    <!--end::Custom Javascript-->

    <!--DataTable-->
    <script src="{{ asset('backend/assets/js/datatable/jquery.dataTables.min.js') }}"></script>
    <!--DataTable-->

    <script>
        $(document).ready(function () {
            $('.datatable-data').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('role.data') }}',
                order: [[0, 'Desc']],
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'is_active',
                        name: 'is_active'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]

            });
        });
    </script>

@endsection

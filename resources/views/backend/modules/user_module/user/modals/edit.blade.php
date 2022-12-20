<!--begin::Modal header-->
<div class="modal-header">
    <!--begin::Modal title-->
    <h2 class="fw-bold">Edit User</h2>
    <!--end::Modal title-->
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
        <span class="svg-icon svg-icon-1">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Close-->
</div>
<!--begin::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
    <!--begin:Form-->
    <form class="form ajax-form" action="{{ route('user.edit', ['id' => $user->id]) }}" autocomplete="off" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">Name</label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Enter User Name" name="name" value="{{ $user->name }}" required />
                </div>
                <!--end::Input group-->
            </div>
            <div class="col-md-6">
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">Email</label>
                    <!--end::Label-->
                    <input type="email" class="form-control form-control-solid" placeholder="Enter User Email" name="email" value="{{ $user->email }}" required autocomplete="off"  />
                </div>
                <!--end::Input group-->
            </div>
            <div class="col-md-6">
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">Phone</label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Enter User Phone" name="phone" value="{{ $user->phone }}" autocomplete="off" required />
                </div>
                <!--end::Input group-->
            </div>
            <div class="col-md-6">
                <!--begin::Input group-->
                <div class="fv-row mb-10 form-group">
                    <!--begin::Label-->
                    <label class="form-label required">Role</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="role_id" class="form-control form-select form-select-lg form-select-solid select2" required>
                        <option disabled>Please Select User Role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if($role->id == $user->role_id) selected @endif>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>
            <div class="col-md-12">
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Status</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="is_active" class="form-select form-select-lg form-select-solid select2" required>
                        <option disabled>Select Status</option>
                        <option value="1" @if($user->is_active == 1) selected @endif>Active</option>
                        <option value="0" @if($user->is_active == 0) selected @endif>Inactive</option>
                    </select>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>

        </div>
        <!--begin::Actions-->
        <div class="text-center">
            <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end:Form-->
</div>
<!--end::Modal body-->



<!--start::ajax form submit-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script>
<!--end::ajax form submit-->

<link href="{{ asset('backend/assets/css/select2/form-select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/css/select2/select2-bootstrap-5-theme.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/css/select2/select2.min.css') }}" rel="stylesheet">
<script src="{{ asset('backend/assets/js/select2/form-select2.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/select2/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function domReady() {
        $(".select2").select2({
            theme: 'bootstrap-5',
            dropdownAutoWidth: true,
            width: '100%',
            dropdownParent: $('#myModal'),
        });
    });
</script>

<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Click here to go to reset password link</div>
                <div class="card-body">
                    <a href="{{ route('password.reset', ['token' => $token, 'email' => encrypt($email)]) }}" target="_blank" class="btn btn-success">Reset Password</a>
                </div>
            </div>
        </div>
    </div>
</div>

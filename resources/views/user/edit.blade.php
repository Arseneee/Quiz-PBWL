@extends('layouts.app')

@section('content')
<h2>Edit User</h2>

<form action="{{ url('user/' . $row->id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="name">NAMA</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $row->name }}" required>
        <div id="nameHelpBlock" class="form-text">
            Update your username.
        </div>
    </div>
    <div class="mb-3">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" class="form-control" value="{{ $row->email }}" required>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="emailHelp" class="form-text">Update your email</div>
    </div>
    <div class="mb-3">
        <label for="old_password">PASSWORD LAMA</label>
        <input type="password" name="old_password" id="old_password" class="form-control" required>
        @error('old_password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div id="passwordConfirmHelpBlock" class="form-text">
            Please confirm your old password.
        </div>
    </div>
    <div class="mb-3">
        <label for="password">PASSWORD BARU</label>
        <input type="password" name="password" id="password" class="form-control">
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div id="passwordHelpBlock" class="form-text">
            Your new password must be 5-20 characters long, contain letters and numbers, and must not contain
            spaces,
            special characters, or emoji.
        </div>
    </div>
    <div class="mb-3">
        <label for="password_confirmation">KONFIRMASI PASSWORD BARU</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        @error('password_confirmation')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div id="passwordConfirmHelpBlock" class="form-text">
            Please confirm your new password.
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection
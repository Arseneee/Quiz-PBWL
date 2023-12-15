@extends('layouts.app')

@section('content')
<h2>Tambah User</h2>

<form action="{{ url('user') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" required>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="nameHelpBlock" class="form-text">
            Enter the username.
        </div>
    </div>
    <div class="mb-3">
        <label for="">EMAIL</label>
        <input type="email" name="email" id="" class="form-control @error('email') is-invalid @enderror" required>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="">PASSWORD</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 5-20 characters long, contain letters and numbers, and must not contain spaces,
            special characters, or emoji.
        </div>
    </div>
    <div class="mb-3">
        <label for="">CONFIRM PASSWORD</label>
        <input type="password" name="password_confirmation" id="" class="form-control" required>
        <div id="passwordConfirmHelpBlock" class="form-text">
            Please confirm your password.
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>
@endsection
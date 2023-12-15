@extends('layouts.app')

@section('content')
<style>
    .custom-card-header {
        background-color: #add8e6;
        border: 2px solid #ffd700;
    }
</style>

<div class="container" style="margin-bottom: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
                <div class="card-header custom-card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Welcome') }} {{ Auth::user()->name }}, {{ __('you are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header custom-card-header">{{ __('Data Golongan') }}</div>

                <div class="card-body">
                    <p class="card-text">{{ __('Total Data: ') . \App\Models\Golongan::count() }}</p>
                    <a href="{{ url('/golongan') }}" class="btn btn-primary">{{ __('View Golongan') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header custom-card-header">{{ __('Data User') }}</div>

                <div class="card-body">
                    <p class="card-text">{{ __('Total Data: ') . \App\Models\User::count() }}</p>
                    <a href="{{ url('/user') }}" class="btn btn-primary">{{ __('View Users') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header custom-card-header">{{ __('Data Pelanggan') }}</div>

                <div class="card-body">
                    <p class="card-text">{{ __('Total Data: ') . \App\Models\Pelanggan::count() }}</p>
                    <a href="{{ url('/pelanggan') }}" class="btn btn-primary">{{ __('View Pelanggan') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div class="text-center mb-6">
                    <a class="navbar-brand" href="{{ url('/') }}">

                        <img src="mdh/images/brand/logo.png" class="header-brand-img desktop-lgo"  alt="Clont logo">
                    </a>
                    {{--                    <img src="mdh/images/brand/logo1.png" class="header-brand-img dark-logo" alt="Clont logo">--}}
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group mb-0">
                            <div class="card p-4">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <h1>Register</h1>
                                        <p class="text-muted">Create New Account</p>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon"><i class="fa fa-user w-4"></i></span>
                                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>
                                        <div class="input-group mb-4">
                                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-4">
                                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block px-4">create a new account</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card text-white bg-primary py-5 d-md-down-none">
                                <div class="card-body text-center">
                                    <div>
                                        <h2>Mdh Ajira Portal</h2>
                                        <p>MDH DO NOT have any agents and DO NOT charge any fees to the interested candidates. Kindly note that only shortlisted applicants will be contacted.</p>
                                        <a href="{{url('/')}}" class="btn btn-secondary mt-3">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

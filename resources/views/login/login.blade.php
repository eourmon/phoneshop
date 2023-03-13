@extends('layouts.master')
@section('content')
<div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-sm-2 mt-md-5 mt-lg-5">
            <div class="mt-sm-2 mt-md-5 mt-lg-5">
                <img src="{{asset('images/login.svg')}}" alt="" width="100%">
            </div>
        </div>
        <div class="col-md-7 mt-4 mb-5">
            <div class="card border-0 login-form">
                <div class="card-body">
                    <h1 class="h4 mb-1 py-4">Sign in account</h1>
                    <hr>
                    <form action="{{url('user_login/dologin')}}" method="POST">
                        @CSRF
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Please enter password" required>
                            </div>
                        </div>
                        <div class="alert mt-2 text-center">
                            <strong class="text-danger text-center">{{session('error')}}</strong>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember_me">
                                <label for="remember_me" class="custom-control-label">Remember me</label>
                            </div>
                            <a href="" class="nav-link-inline font-size-sm"> Forgot password</a>
                        </div>
                        <div class="text-center pt-4">
                            <button type="submit" class="btn btn-info btn-primary col-sm-6">
                                <span class="spinner-border-sm me-2" aria-hidden="true" role="status">Sign In</span>
                            </button>
                        </div>
                    </form>
                    <div class="text-center pt-4">
                        <span>Don't have an account yet?</span>
                        <a href="{{route('register.index')}}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


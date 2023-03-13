@extends('layouts.master')
@section('content')
<div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-sm-2 mt-md-5 mt-lg-5">
            <div class="mt-sm-2 mt-md-5 mt-lg-5">
                <img src="{{asset('images/register.svg')}}" alt="" width="100%">
            </div>
        </div>
        <div class="col-md-7 mt-4 mb-5">
            <div class="card border-0 login-form">
                <div class="card-body">
                    <h1 class="h4 mb-1 py-4">Register account</h1>
                    <hr>
                    @component('admin::coms.alert')
                    @endcomponent
                    <form action="{{route('register.save')}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-3 col-form-label" required>Phone</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label" required>Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label" required>Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Please enter password">
                            </div>
                        </div>
                        <div class="alert mt-2"></div>
                        <div class="text-center pt-4">
                            <button type="submit" class="btn btn-info btn-primary col-sm-6">
                                <span class="spinner-border-sm me-2" aria-hidden="true" role="status">Sign Up</span>
                            </button>
                        </div>
                    </form>
                    <div class="text-center pt-4">
                        <span>Already have an account?</span>
                        <a href="{{route('user_login.index')}}">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
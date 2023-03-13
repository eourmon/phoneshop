@extends('layouts.master')
@section('content')
    <div class="container">
        <form method="POST" action="">
            <div class="row mt-4 mb-4 checkout">
                <h1 class="text-center">Checkout</h1>
                <hr>
                <div class="col-lg-4 col-md-6 col-sm-4 mt-4">
                    <h3>Billing details</h3>
                    <div class="mb-3 row mt-5">
                        <div class="col-sm-10">
                            <label for="firstname" class="col-sm-5 col-form-label"><strong>First Name</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="firstname" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <label for="countryname" class="col-sm-10 col-form-label"><strong>Country / Region</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="countryname" value="Cambodia" disabled>
                        </div>
                    </div>
                    
                    <div class="mb-3 row mt-5">
                        <div class="col-sm-10">
                            <label for="distric" class="col-sm-10 col-form-label"><strong>Khan / Distric</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="distric" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <label for="address" class="col-sm-5 col-form-label"><strong>Address</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="address" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <label for="email" class="col-sm-10 col-form-label"><strong>Email</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="email" required>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 col-md-6 col-sm-5" style="margin-top: 85px;">
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <label for="lastname" class="col-sm-5 col-form-label"><strong>Last Name</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="lastname" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <label for="city" class="col-sm-5 col-form-label"><strong>City / Provices</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="city" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row mt-5">
                        <div class="col-sm-10">
                            <label for="distric" class="col-sm-10 col-form-label"><strong>Songkat / Commune</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="distric" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <label for="phone" class="col-sm-5 col-form-label"><strong>Phone Number</strong> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-check" id="phone" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-10 col-form-label"><strong>Additional information</strong></label>
                        <div class="col-sm-10 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id=""></textarea>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-md-6 col-sm-3 mt-4">
                    <h3>Your Order</h3>
                    <div class="checkout_box" style="margin-top: 60px;">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 check_order">
                                <h6>SUBTOTAL</h6>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 check_order">
                                <h6 class="text-danger " style="text-align: right;"></h6>
                            </div>
                            <hr>
                            <div class="col-lg-6 col-md-6 col-sm-6 check_order">
                                <h6>TOTAL</h6>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h6 class="text-danger" style="text-align: right;">$1230</h6>
                            </div>
                            <hr>
                            <div class="col-lg-12 col-md-6 col-sm-12  check_order">
                                <input type="radio" checked> Cash on delivery
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <p class="" style="color: #bfbfbf; font-size: 13px;">Pay with cash upon delivery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                    <button class="btn btn-success" type="button">Button</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
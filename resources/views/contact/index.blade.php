@extends('layouts.master')
@section('content') 
    <div class="container bg-white ">
        <div class="row mt-4 mb-4" style="padding:15px;">
            <div class="col-12 col-md-6 pd-5">
                <div class="mt-5">
                    <h2 align="center">សូមស្វាគមន៍</h2>
                    <h5 style="line-height: 30px; text-align: justify;">បើលោកអ្នកមានបញ្ហា ឬ មានសំនួរ លោកអ្នកអាចទាក់ទងមកកាន់លេខទូរស័ព្ទខាងក្រោមនេះ៖</h5>
                    <h5>023 216 726</h5>
                    <h5>023 216 725</h5>
                    <h5>023 216 726</h5>
                    <h5>023 216 725</h5>
                </div>
                <div class="mt-2">
                    <img src="{{asset('cus_service.jpg')}}" alt="" width="100%">
                </div>
            </div>
            <div class="col-12 col-md-6 bg-fill mt-4 mb-4">
                <div class="mt-5 mb-4">
                    <h5 style="line-height: 30px; color: #419add;">
                        if you have any questions or inquiries, fell free to use this from and we will get back to you as soon as possible
                    </h5>
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="phone" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="subject" class="form-control" id="subject" placeholder="Subject">
                        </div> --!>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                        </div>
                        <h1 align="center">
                            <button type="submit" class="btn btn-lg btn-warning text-white mt-3 mt-sm-0 px-5 text-uppercase center pd-2">
                            <i class="fas fa-paper-plane"></i> Submit
                            </button>
                        </h1>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
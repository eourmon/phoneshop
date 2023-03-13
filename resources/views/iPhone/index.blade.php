@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row mt-4">
        @foreach($iphone as $i)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <figure class="card card-product-grid">
                <a href="{{url('details/iphone?id='. $i->id)}}">
                    <div class="img-wrap mt-4"> 
                        <img src="{{asset($i->photo)}}"> 
                    </div>
                </a>
                <figcaption class="info-wrap border-top">
                    <div class="price-wrap">
                        <span class="price">$ {{$i->price}}</span>
                    </div> <!-- price-wrap.// -->
                    <p class="title mb-2">{{$i->title}}</p>
                    <a href="#" class="btn btn-light btn-icon"><i class="fa fa-cart-plus"></i></a>
                    <a href="{{url('details/iphone?id='. $i->id)}}" class="btn btn-light btn-icon"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                </figcaption>    
            </figure>   
        </div>
        @endforeach <!-- col end.// -->
    </div>
</div>
    <!-- Section iPhone -->
    <!-- <div class="container">
        <div class="row body-box_iphon_detail">
            <div class="col-sm-12 mb-4">
                <div class="link_title">
                    <h2 style="color:#c14794;">iPhone</h2>
                </div>
                <div class="row mt-4">
                    @foreach($iphone as $i)
                    <div class="col-sm-3 Wrp_product">
                        <a href="{{url('details/iphone?id='. $i->id)}}">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset($i->photo)}}" alt="">
                                </div>
                                <div class="txtWrp">
                                <h3>{{$i->title}}</h3>
                                    <p>
                                        <strong>{{$i->price}}</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    <!-- @endforeach -->
                    <!-- <div class="col-sm-3">
                        <a href="#">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/2.jpg')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Pro 256G</h3>
                                    <p>
                                        <strong>$1500</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/3.png')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Pro 512G</h3>
                                    <p>
                                        <strong>$1741</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/4.jpg')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Mini 64G</h3>
                                    <p>
                                        <strong>$639</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div> -->
                <!-- </div> -->
                <!-- <div class="row mt-4">
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/5.png')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Mini 128G</h3>
                                    <p>
                                        <strong>$669</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/8.jpg')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Pro 512G</h3>
                                    <p>
                                        <strong>$1620</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/9.jpg')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Pro 128G</h3>
                                    <p>
                                        <strong>$1258</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="deviceBox">
                                <div class="imgWrp">
                                    <img src="{{asset('assets/img/iphone/8.jpg')}}" alt="">
                                </div>
                                <div class="txtWrp">
                                    <h3>iPhone 12 Mini 128G</h3>
                                    <p>
                                        <strong>$819</strong> one time-fee
                                    </p>
                                    <span class="btn btn-lg btn-warning button-details" style="width: 100%; !important; color: #ffffff; font-weight: bolder;">
                                        View Details
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->
            <!-- </div>
    </div> -->
    <!-- End Section iPhone -->
@endsection
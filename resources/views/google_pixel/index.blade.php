@extends('layouts.master')
@section('content')
    <!-- Section iPhone -->
    <div class="container">
        <div class="row body-box_iphon_detail">
            <div class="col-sm-12 mb-4">
                <div class="link_title">
                    <h2 style="color:#c14794;">Google Pixel</h2>
                </div>
                <div class="row mt-4">
                    @foreach($pixel as $i)
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
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
    <!-- End Section iPhone -->
@endsection
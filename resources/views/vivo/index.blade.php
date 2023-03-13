@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row mt-4">
        @foreach($vivo as $v)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <figure class="card card-product-grid">
                <a href="{{url('details/vivo?id='. $v->id)}}">
                    <div class="img-wrap mt-4"> 
                        <img src="{{asset($v->photo)}}"> 
                    </div>
                </a>
                <figcaption class="info-wrap border-top">
                    <div class="price-wrap">
                        <span class="price">$ {{$v->price}}</span>
                    </div> <!-- price-wrap.// -->
                    <p class="title mb-2">{{$v->title}}</p>
                    <a href="#" class="btn btn-light btn-icon"><i class="fa fa-cart-plus"></i></a>
                    <a href="{{url('details/vivo?id='. $v->id)}}" class="btn btn-light btn-icon"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                </figcaption>    
            </figure>   
        </div>
        @endforeach <!-- col end.// -->
    </div>
</div>
@endsection
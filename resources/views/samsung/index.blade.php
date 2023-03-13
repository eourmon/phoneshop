@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row mt-4">
        @foreach($samsung as $s)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <figure class="card card-product-grid">
                <a href="{{url('details/samsung?id='. $s->id)}}">
                    <div class="img-wrap mt-4"> 
                        <img src="{{asset($s->photo)}}"> 
                    </div>
                </a>
                <figcaption class="info-wrap border-top">
                    <div class="price-wrap">
                        <span class="price">$ {{$s->price}}</span>
                    </div>
                    <p class="title mb-2">{{$s->title}}</p>
                    <a href="#" class="btn btn-light btn-icon"><i class="fa fa-cart-plus"></i></a>
                    <a href="{{url('details/samsung?id='. $s->id)}}" class="btn btn-light btn-icon"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                </figcaption>    
            </figure>   
        </div>
        @endforeach
    </div>
</div>
@endsection
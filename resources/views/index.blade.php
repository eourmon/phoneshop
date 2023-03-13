@extends('layouts.master')
@section('content')
    <!-- ===============SECTION SLIDES=================== -->
    <div class="container">
        <div class="row mt-4">
        @component('admin::coms.alert')
        @endcomponent
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $i=1 ?>
                    @foreach($slide as $s)
                    <div class="carousel-item {{$i==1?'active':''}}">
                    <img src="{{asset($s->photo)}}" class="d-block w-100" alt="">
                    </div>
                   <?php $i++; ?>
                    @endforeach
                </div>
                <!-- <button class="carousel-control" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
    </div>
    <!-- ===============END SECTION SLIDES=============== -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-12">
                <a href="">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/banner/banner.png')}}" alt="" class="rounded-img">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- ================ SECTION INTRO END.// ================ -->

    <!-- ================ SECTION PRODUCTS ================ -->
    <section class="padding-y">
        <div class="container">
            <header class="section-heading title-product">
                <h3 class="section-title">New products</h3>
            </header> 

            <div class="row">
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
                            </div>
                            <p class="title mb-2">{{$i->title}}</p>
                            <a href="#" class="btn btn-light btn-icon"><i class="fa fa-cart-plus"></i></a>
                            <a href="{{url('details/iphone?id='. $i->id)}}" class="btn btn-light btn-icon"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>    
                    </figure>   
                </div>
                @endforeach 
            </div>

            <header class="section-heading title-product">
                <h3 class="section-title">Samsung products</h3>
            </header> 

            <div class="row">
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

            <header class="section-heading title-product">
                <h3 class="section-title">Vivo products</h3>
            </header> 

            <div class="row">
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
                            </div>
                            <p class="title mb-2">{{$v->title}}</p>
                            <a href="#" class="btn btn-light btn-icon"><i class="fa fa-cart-plus"></i></a>
                            <a href="{{url('details/vivo?id='. $v->id)}}" class="btn btn-light btn-icon"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>    
                    </figure>   
                </div>
                @endforeach 
            </div>

            <header class="section-heading title-product">
                <h3 class="section-title"> Oppo products</h3>
            </header> 

            <div class="row">
                @foreach($oppo as $o)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <a href="{{url('details/oppo?id='. $o->id)}}">
                            <div class="img-wrap mt-4"> 
                                <img src="{{asset($o->photo)}}"> 
                            </div>
                        </a>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$ {{$o->price}}</span>
                            </div>
                            <p class="title mb-2">{{$o->title}}</p>
                            <a href="#" class="btn btn-light btn-icon"><i class="fa fa-cart-plus"></i></a>
                            <a href="{{url('details/oppo?id='. $o->id)}}" class="btn btn-light btn-icon"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>    
                    </figure>   
                </div>
                @endforeach 
            </div> 

        </div> <!-- container end.// -->
    </section>
    <!-- ================ SECTION PRODUCTS END.// ================ -->

    <!-- ================ SECTION BLOG ================ -->
    <section class="padding-y">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Blog posts</h3>
            </header> 

            <div class="row">
            @foreach($news as $n)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <article>
                    <a href="#" class="img-wrap">
                    <img class="rounded w-100" src="{{asset($n->photo)}}" height="160">
                    </a> 
                    <div class="mt-2">
                    <time class="text-muted small d-block mb-1" datetime="2022-02-14 00:00"> <i class="fa fa-calendar-alt"></i> 23.12.2021</time>
                    <a href="#"><h6 class="title">{{$n->title}}</h6></a>
                    <p>{!! $n->description !!}</p>
                    </div>
                </article>
                
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- ================ SECTION BLOG END.// ================ -->
@endsection
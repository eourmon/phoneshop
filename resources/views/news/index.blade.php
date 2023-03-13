@extends('layouts.master')
@section('content')
    <section class="padding-y">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Blog posts</h3>
            </header> 

            <div class="row">
                @foreach($news as $n)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <article style="background: #ffff; padding: 15px; border-radius: 8px;">
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
@endsection
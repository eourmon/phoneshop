@extends('layouts.master')
@section('content')
<div class="page-title-overlap bg-dark pt-4">
    <div class="container">
        <div class="row">
            <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-5">
                    <div class="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}" class="text-nowrap nuxt-link-active"> <i class="fa fa-home"></i> Home ></a>
                            </li>
                            <li class="breadcrump-item">
                                <a href="" class="breadcrumb-item text-nowrap">Shops  ></a>
                            </li>
                            <li class="breadcrump-item">
                                <a href="" class="breadcrumb-item text-nowrap" disabled class="disabled"> {{$details->b_name}} ></a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                    <h1 class="h3 text-light mb-0">{{$details->title}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="wap-detail">
        <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-4">
            <div class="px-lg-3">
                <div class="row">
                    <div class="col-lg-7 pr-lg-0 pt-lg-4 pb-5">
                        <div class="cz-product-gallery">
                            <div class="cz-preview order-sm-2 max-auto text-center">
                                <div class="cz-preview-item image_width active">
                                    <div class="max-auto text-center image_content">
                                        <img src="{{asset($details->photo)}}" alt="" class="cz-image-zoom custome_image lazy LoadisLoaded">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="btn-scroll-top-icon fas fa-sort-up arrow mb-3 d-none d-md-block d-sm-block" style="font-size: 40px;"></i>
                                <div class="cz-thumblist slider">
                                    <a href="" class="cz-thumblist-item active">
                                        <img src="{{asset($details->photo)}}" alt="" class="lazyLoad isLoaded">
                                    </a>
                                    <a href="" class="cz-thumblist-item">
                                        <img src="{{asset('images/items/iphone2.jpg')}}" alt="" class="lazyLoad isLoaded">
                                    </a>
                                    <a href="" class="cz-thumblist-item">
                                        <img src="{{asset('images/items/iphone1.jpg')}}" alt="" class="lazyLoad isLoaded">
                                    </a>
                                    <a href="" class="cz-thumblist-item">
                                        <img src="{{asset('images/items/iphone3.jpg')}}" alt="" class="lazyLoad isLoaded">
                                    </a>
                                    <a href="" class="cz-thumblist-item">
                                        <img src="{{asset('images/items/iphone4.jpg')}}" alt="" class="lazyLoad isLoaded">
                                    </a>
                                </div>
                                <!-- <i class="btn-scroll-top-icon fas fa-sort-down arrow mb-3 d-none d-md-block d-sm-block" style="font-size: 40px;"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pt-4 pt-lg-0 cz-images-zoom-pane">
                        <div class="product-details ml-auto pb-3">
                            <div class="d-flex justify-content-end align-items-center mb-2 favorite">
                                <div data-toggle="tooltip" title="Add to wishlist" class="btn-wishlist">
                                    <ol>
                                        <li><i class="fas fa-heart"></i></li>
                                        <li><span>Favorite</span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="h3 font-weight-normal text-danger mr-2">
                                <i class="fa fa-dollar-sign"></i> {{$details->deposit}}
                            </span>
                            <span class="badge badge-info badge-shadow1 align-middle mt-n2 text-write bg-danger">
                                Downpayment
                            </span><br><br>
                            <span class="h3 font-weight-normal text-danger mr-2 mtst">
                                <i class="fa fa-dollar-sign"></i> {{$details->price}}
                            </span>
                            <span class="badge badge-info badge-shadow2 align-middle mt-n2 text-write ">
                                Fullpayment
                            </span>
                        </div>
                        <div class="font-size-sm mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <span class="detail-text font-weight-medium">Coupon</span>
                                </div>
                                <div class="col-9">
                                    <span class="text-muted font-weight-medium">{{$details->s_name}}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <span class="detail-text font-weight-medium">RAM</span>
                                </div>
                                <div class="col-9">
                                    <span class="text-muted font-weight-medium">{{$details->ram}} <strong>G</strong></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <span class="detail-text font-weight-medium">Storages</span>
                                </div>
                                <div class="col-9">
                                    <span class="text-muted font-weight-medium">{{$details->storage}} <strong>G</strong></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3"> 
                                    <span class="detail-text font-weight-medium">Model</span>
                                </div>
                                <div class="col-9">
                                    <span class="text-muted font-weight-medium">{{$details->title}}</span>
                                </div>
                            </div>
                            <form action="{{url('cart/save')}}" method="POST" class="mb-grid-gutter">
                                @CSRF
                                <input type="hidden" name="title" value="{{$details->title}}">
                                <input type="hidden" name="deposit" value="{{$details->deposit}}">
                                <input type="hidden" name="price" value="{{$details->price}}">
                                <input type="hidden" name="ram" value="{{$details->ram}}">
                                <input type="hidden" name="storage" value="{{$details->storage}}">
                                <input type="hidden" name="product_id" value="{{$details->id}}">
                                <input type="hidden" name="stock" value="{{$details->s_id}}">
                                <input type="hidden" name="discount" value="{{$details->discount}}">
                                <input type="hidden" name="brand" value="{{$details->b_id}}">
                                <input type="hidden" name="type" value="{{$details->t_id}}">
                                <input type="hidden" name="photo" value="{{$details->photo}}">
                                <input type="hidden" name="description" value="{{$details->description}}">
                                @if(session('user') != null)
                                    <input type="hidden" name="phone_number" value="{{session('user')->phone_number}}">
                                    <input type="hidden" name="name" value="{{session('user')->name}}">
                                    <input type="hidden" name="email" value="{{session('user')->email}}">
                                @endif
                                <div class="row mt-3">
                                    <div class="col-3">
                                        <div class="detail-text font-weight-medium mr-1">
                                            Quantity
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group d-flex align-items-center mt-0">
                                            <div id="decrease" class="value-button btn btn-oval" value="Decrease Value">-</div>
                                            <input type="number" id="number" min="1" max="10" readonly="readonly" value="1"
                                                disabled style="border: none; color: #979797;" class="text-center">
                                            <div id="decrease" class="value-button btn btn-oval" value="Decrease Value">+</div>
                                        </div>
                                    </div><br><br> 
                                    <div class="row">
                                        <div class="col-5 d-flex">
                                            <button class="btn btn-outline-primary btn-shadow d-inline buy">
                                                <i class="fa fa-cart-plus"></i> Add to cart
                                            </button>
                                        </div>
                                        <div class="col-5 d-flex">
                                            <button class="btn btn btn-primary btn-medium mr-1">
                                                <i class="fa fa-heart"></i> Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin::layouts.master')
@section('header')
<strong>Cart Details</strong>
@endsection
@section('content')
<div class="card card-gray">
    <div class="toolbox">
        <div class="row">
            <div class="col-sm-3">
                <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval" data-original-title="Rebuild">
                    <i class="fa fa-refresh"></i></a>
                <a href="{{route('cart.index')}}" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval">
                    <i class="fa fa-reply"></i></a>
            </div>
        </div>
    </div>
    <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
        <table class="table table-lg">
            <thead class="bg-info">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Ram (G)</th>
                    <th scope="col">Storage (G)</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <?php
                $pagex = @$_GET['page'];
                if(!$pagex)   $pagex = 1;
                $i = config('app.row') * ($pagex-1) + 1;
            ?>
            <tbody>
                <p>
                    <strong>Product of user name [ <span class="text-danger">{{$user->u_name}}</span> ]</strong>
                </p>
                @foreach($list_order?? [] as $l)
                    
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$l->title}}</td>
                        <td>{{$l->b_name}}</td>
                        <td>{{$l->t_name}}</td>
                        <td>{{$l->ram}}</td>
                        <td>{{$l->storage}}</td>
                        <td>$ {{$l->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#sidebar-menu li').removeClass('active');
        $('#sidebar-menu li ul li').removeClass('active');
        $('#menu_cart').addClass('active open');
        $('#collapse_cart').addClass('collapse in');
        $('#menu_cart_pending').addClass('active');
    });
</script>
@endsection
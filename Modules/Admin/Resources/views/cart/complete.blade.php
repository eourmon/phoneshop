@extends('admin::layouts.master')
@section('header')
<strong>Completed</strong>
@endsection
@section('content')
<div class="card card-gray">
    <div class="toolbox">
        <div class="row">
            <div class="col-sm-3">
                <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
            </div>
        </div>
    </div>
    <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
        <table class="table table-lg">
            <thead class="bg-info">  
                <tr>
                    <th scope="row">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Items</th>
                    <th scope="col">SubTotal</th> 
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <?php
                $pagex = @$_GET['page'];
                if(!$pagex)   $pagex = 1;
                $i = config('app.row') * ($pagex-1) + 1;
            ?>
            <tbody>
                @foreach($completed as $or)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$or->u_name}}</td>
                        <td>{{$or->phone_number}}</td>
                        <td>{{$or->email}}</td>
                        <td>{{$or->TotalItem}}</td>
                        <td>$ {{$or->SubTotal}}</th>
                        <td>
                            <a href="{{route('cart.done', $or->user_id)}}" class="btn btn-sm text-white btn-oval" style="background-color: #d161b5;">
                                <span>View</span> <i class="fa fa-eye"></i>
                            </a>
                            </a>
                        </td>
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
        $('#menu_cart_completed').addClass('active');
    });
</script>
@endsection
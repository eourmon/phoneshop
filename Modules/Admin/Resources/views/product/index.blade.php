@extends('admin::layouts.master')
@section('header')
<strong>Product</strong>
@endsection
@section('content')
<div class="card card-gray">
    <div class="toolbox">
        <div class="row">
            <div class="col-sm-3">
                <a href="{{route('product.create')}}" class="btn btn-primary btn-lg btn-oval" id="btn_create">
                    <i class="fa fa-plus-circle"></i>
                </a>
                <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
            </div>
            <div class="col-sm-4 mb-2">
                <form action="{{route('product.search')}}">
                    <input type="text" class="form-control" name="q" placeholder="Search by Keyword.." value="{{$q}}">
                </form>
            </div>
        </div>
    </div>
    <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Models</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pagex = @$_GET['page'];
                    if(!$pagex)   $pagex = 1;
                    $i = config('app.row') * ($pagex -1) + 1;
                ?>
                @foreach($p_phone as $p)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <img src="{{asset($p->photo)}}" alt="" width="55">
                        </td>
                        <td>{{$p->title}}</td>
                        <td>{{$p->b_name}}</td>
                        <td>{{$p->p_type}}</td>
                        <td>{{$p->s_name}}</td>
                        <td><span>$</span> {{$p->price}}</td>
                        <td>
                            <a href="{{route('product.edit', $p->id)}}" class="btn btn-warning btn-sm btn-oval text-white">
                                <i class="fa fa-pencil"></i> Edit</a>
                            <a href="{{route('product.delete', $p->id)}}" class="btn btn-danger btn-sm btn-oval" 
                                onclick="return confirm('You want to delete?')"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$p_phone->appends(request()->input())->links()}}
    </div>
</div>
@endsection
@section('js')
<script>
   $(document).ready(function() {
        $('#sidebar-menu li').removeClass('active');
        $('#sidebar-menu li ul li').removeClass('active');
        $('#menu_product').addClass('active open');
        $('#collapse_product').addClass('collapse in');
        $('#menu_index').addClass('active');
    });
</script>
@endsection
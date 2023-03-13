@extends('admin::layouts.master')
@section('header')
<strong>Product Brand</strong>
@endsection
@section('content')
<div class="card card-gray">
    <div class="toolbox">
        <div class="row">
            <div class="col-sm-3">
                <a href="{{route('brand.create')}}" class="btn btn-primary btn-lg btn-oval">
                    <i class="fa fa-plus-circle"></i>
                </a>
                <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
            </div>
            <div class="col-sm-4 mb-2">
                <form action="{{route('brand.search')}}">
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
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                $pagex = @$_GET['page'];
                if(!$pagex)   $pagex = 1;
                $i = config('app.row') * ($pagex-1) + 1;
            ?>
            <tbody>
                @foreach($p_brand as $b)
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        <img src="{{asset($b->photo)}}" alt="" style="width: 70px; height: 90px;">
                    </td>
                    <td>{{$b->name}}</td>
                    <td>
                        <a href="{{route('brand.edit', $b->id)}}" class="btn btn-primary btn-sm btn-oval" title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{route('brand.delete', $b->id)}}" class="btn btn-danger btn-sm btn-oval" title="Delete" onclick="return confirm('You want to delete?')">
                            <i class="fa fa-trash"></i>
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
        $('#menu_product').addClass('active open');
        $('#collapse_product').addClass('collapse in');
        $('#menu_brand').addClass('active');
    });
</script>
@endsection
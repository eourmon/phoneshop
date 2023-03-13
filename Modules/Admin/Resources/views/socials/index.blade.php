@extends('admin::layouts.master')
@section('header')
    <strong>Social</strong>
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('social.create')}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval"
                        data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
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
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Url</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $pagex = @$_GET['page'];
                        if(!$pagex)   $pagex = 1;
                        $i = config('app.row') * ($pagex-1) + 1;
                    ?>
                    @foreach($socials as $s)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->icon}}</td>
                        <td>{{$s->url}}</td>
                        <td>
                            <a href="{{route('social.edit', $s->id)}}" class="btn btn-primary btn-sm btn-oval" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="{{route('social.delete', $s->id)}}" class="btn btn-danger btn-sm btn-oval" title="Delete" onclick="return confirm('You want to delete?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$socials->links()}}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
            $('#menu_config').addClass('active open');
            $('#collapse_config').addClass('collapse in');
            $('#menu_social').addClass('active');
        });
    </script>
@endsection
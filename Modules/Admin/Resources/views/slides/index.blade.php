@extends('admin::layouts.master')
@section('header')
    <strong>Slides</strong>
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('slide.create')}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-plus"></i>
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
                        <th>Photo</th>
                        <th>Sequence</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 <?php 
                    $pagex = @$_GET['page'];
                    if(!$pagex) $pagex =1;
                    $i = config('app.row') * ($pagex-1) +1;
                 ?>
                    @foreach($slides as $s)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><img src="{{asset($s->photo)}}" alt="" width="72"></td>
                            <td>{{$s->sequence}}</td>
                            <td>
                                <a href="{{route('slide.edit',$s->id)}}" class="btn btn-primary btn-sm btn-oval" title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{route('slide.delete',$s->id)}}" class="btn btn-danger btn-sm btn-oval" title="Delete" onclick="return confirm('You want to Delete?')">
                                    <i class="fa fa-trash"></i> 
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$slides->links()}}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
           
            $('#menu_slide').addClass('active');
        });
    </script>
@endsection
@extends('admin::layouts.master')
@section('header')
    <strong>Jobs Opportunities</strong>
@endsection
@section('content')
<div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('job.create')}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-plus"></i>
                    </a>
                    <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval"
                        data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                </div>
                <div class="col-sm-4 mb-2">
                    <form action="{{route('user.search')}}">
                        <input type="text" class="form-control"  name="q" placeholder="Search job..." value="">
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
                        <th>Job Title</th>
                        <th>Hiring</th>
                        <th>Branch</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>  
                    <?php
                        $pagex = @$_GET['page'];
                        if(!$pagex)   $pagex = 1;
                        $i = config('app.row') * ($pagex-1) + 1;
                    ?>
                    @foreach($jobs as $j)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$j->job_title}}</td>
                        <td>{{$j->hiring}}</td>
                        <td>{{$j->bname}}</td>
                        <td>{{$j->address}}</td>
                        <td>
                            <a href="{{route('job.edit', $j->id)}}" class="btn btn-primary btn-sm btn-oval" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="{{route('job.delete', $j->id)}}" class="btn btn-danger btn-sm btn-oval" title="Delete" onclick="return confirm('You want to delete?')">
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
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
            $('#menu_job').addClass('active open');
            $('#collapse_job').addClass('collapse in');
            $('#menu_employee').addClass('active');
        });
    </script>
@endsection
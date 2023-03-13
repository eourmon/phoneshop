@extends('admin::layouts.master')
@section('header')
    <strong>Company Info</strong>
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('company.edit',$com->id)}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval"
                        data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                </div>
            </div>
        </div>
        <div class="card-block">
            @component('admin::coms.alert')
            @endcomponent
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Name</label>
                        <div class="col-sm-9">
                            : {{$com->name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Email</label>
                        <div class="col-sm-9">
                            : {{$com->email}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Phone</label>
                        <div class="col-sm-9">
                            : {{$com->phone}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Address</label>
                        <div class="col-sm-9">
                            : {{$com->address}}
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-5">
                    <img src="{{asset($com->logo)}}" alt="" width="150">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <strong>Description</strong>
                    </p>
                    {{$com->description}}
                </div>
            </div>
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
            $('#menu_com').addClass('active');
        });
    </script>
@endsection
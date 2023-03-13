@extends('admin::layouts.master')
@section('header')
    <strong>No Permission</strong>
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('role.index')}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-reply"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
            <table class="table table-sm table-bordered">
                <thead>
                    <p></p>
                    <h2 class="text-danger">You don't have permission here!</h2>
                </thead>
            </table>
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
            $('#menu_role').addClass('active');
        });
    </script>
@endsection
@extends('admin::layouts.master')
@section('header')
<strong>Create User</strong>
@endsection
@section('content')
<form action="{{route('role.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-lg btn-oval">
                <i class="fa fa-save"></i>
            </button>
            <a href="{{route('role.index')}}" class="btn btn-secondary btn-lg btn-oval">
                <i class="fa fa-reply"></i>
            </a>
        </div>
        <div class="card-block">
            @component('admin::coms.alert')
            @endcomponent
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3">Role Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required autofocus value="{{old('name')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#sidebar-menu li').removeClass('active');
        $('#sidebar-menu li ul li').removeClass('active');
        $('#menu_config').addClass('active open');
        $('#collapse_config').addClass('collapse in');
        $('#menu_role').addClass('active');
    });
</script>
@endsection
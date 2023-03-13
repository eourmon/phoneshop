@extends('admin::layouts.master')
@section('header')
<strong>Create User</strong>
@endsection
@section('content')
<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-lg btn-oval">
                <i class="fa fa-save"></i>
            </button>
            <a href="{{route('user.index')}}" class="btn btn-secondary btn-lg btn-oval">
                <i class="fa fa-reply"></i>
            </a>
        </div>
        <div class="card-block">
            @component('admin::coms.alert')
            @endcomponent
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required autofocus value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3">Username <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" required autofocus value="{{old('username')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3">Eamil <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" required value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3">Password <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role_id" class="col-sm-3">User Type <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="form-control chosen-select" name="role_id">
                                <option value="">--Select Role--</option>
                                @foreach($roles as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group row">
                        <label for="photo" class="col-sm-3">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="photo" name="photo" onchange="preview(event)" accept="image/*">
                            <div style="margin-top=: 9px">
                                <img src="" alt="" id="img" width="120">
                            </div>
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
        $('#menu_user').addClass('active');
    });

    function preview(evt) {
        let img = document.getElementById('img');
        img.src = URL.createObjectURL(evt.target.files[0]);
    }
</script>
@endsection
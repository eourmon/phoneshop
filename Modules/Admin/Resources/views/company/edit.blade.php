@extends('admin::layouts.master')
@section('header')
    <strong>Edit Company</strong>
@endsection
@section('content')
<form action="{{route('company.update', $com->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-lg btn-oval">
                <i class="fa fa-save"></i> Save
            </button>
        </div>
        <div class="card-block">
            @component('admin::coms.alert')
            @endcomponent
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name"  
                                value="{{$com->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email"
                                value="{{$com->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone"
                                value="{{$com->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address"
                                value="{{$com->address}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group row">
                        <label for="" class="col-sm-3">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                                onchange="preview(event)">
                            <div style="margin-top: 9px">
                                <img src="{{asset($com->logo)}}" alt="" id="img" width="120">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <strong>Description</strong>
                    </p>
                    <textarea name="description" id="description" cols="100" rows="5">
                        {{$com->description}}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</form>
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
        function preview(evt)
        {
            let img = document.getElementById('img');
            img.src = URL.createObjectURL(evt.target.files[0]);
        }
    </script>
@endsection
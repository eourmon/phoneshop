@extends('admin::layouts.master')
@section('header')
<strong>Create Brand</strong>
@endsection
@section('content')
<form action="{{route('brand.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-lg btn-oval">
                <i class="fa fa-save"></i>
            </button>
            <a href="{{route('brand.index')}}" class="btn btn-secondary btn-lg btn-oval">
                <i class="fa fa-reply"></i></a>
        </div>
        <div class="card-block">
            @component('admin::coms.alert')
            @endcomponent
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group row">
                        <label for="photo" class="col-sm-3">Photos </label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="photo" name="photo" onchange="preview(event)" accept="image/*">
                            <div class="mt-2">
                                <img src="{{asset($brand->photo)}}" alt="" id="img" width="290">
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
        $('#menu_product').addClass('active open');
        $('#collapse_product').addClass('collapse in');
        $('#menu_brand').addClass('active');
    });

    function preview(evt) {
        let img = document.getElementById('img');
        img.src = URL.createObjectURL(evt.target.files[0]);
    }
</script>
@endsection
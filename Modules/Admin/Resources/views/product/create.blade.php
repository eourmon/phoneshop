@extends('admin::layouts.master')
@section('header')
<strong>Create Prodcuts</strong>
@endsection
@section('content')
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-lg btn-oval">
                <i class="fa fa-save"></i>
            </button>
            <a href="{{route('product.index')}}" class="btn btn-secondary btn-lg btn-oval">
                    <i class="fa fa-reply"></i></a>
        </div>
        <div class="card-block">
            @component('admin::coms.alert')
            @endcomponent
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="title" class="col-sm-3">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-3">Price <span class="">$</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deposit" class="col-sm-3">Deposit <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="deposit" name="deposit" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_type" class="col-sm-3">Type <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="p_type" class="form-control chosen-select">
                                @foreach($types as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="storage" class="col-sm-3">Storage <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="storage" name="storage" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="ram" class="col-sm-3">Ram <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="ram" name="ram" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discount" class="col-sm-3">Discounts <span>%</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="discount" name="discount" value="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3">Status <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="status" class="form-control chosen-select">
                                @foreach($stock as $s)
                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brand" class="col-sm-3">Brands <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="brand" class="form-control chosen-select">
                                @foreach($brand as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-sm-3">Photos </label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="photo" onchange="preview(event)" accept="image/*">
                            <div class="mt-2">
                                <img src="" alt="" id="img" width="355">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Details / Description</h3><hr>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="description" placeholder="Description"
                                data-toggle="summernote" data-lang="" class="form-control"
                                style="display: none;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('backend/js/summernote/summernote.js')}}"></script>
<link href="{{asset('backend/js/summernote/summernote.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{asset('backend/js/summernote/summernote-image-attributes.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/summernote/opencart.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#sidebar-menu li').removeClass('active');
        $('#sidebar-menu li ul li').removeClass('active');
        $('#menu_product').addClass('active open');
        $('#collapse_product').addClass('collapse in');
        $('#menu_index').addClass('active');
    });

    function preview(evt) {
        let img = document.getElementById('img');
        img.src = URL.createObjectURL(evt.target.files[0]);
    }
</script>
@endsection
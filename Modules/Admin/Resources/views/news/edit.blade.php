@extends('admin::layouts.master')
@section('header')
    <strong>Edit News</strong>
@endsection
@section('content')
    <form action="{{route('news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card card-gray">
            <div class="toolbox">
                <button class="btn btn-primary btn-lg btn-oval">
                    <i class="fa fa-save"></i>
                </button>
                <a href="{{route('news.index')}}" class="btn btn-secondary btn-lg btn-oval">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
            <div class="card-block">
                @component('admin::coms.alert')
                @endcomponent
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="title" class="col-sm-4">Title : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" autofocus value="{{$news->title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user" class="col-sm-4">User Post :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="user" value="{{$news->user}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-4">Date :</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date" value="{{$news->date}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="photo" class="col-sm-3">Photo <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="photo" name="photo"
                                    accept="image/*" onchange="preview(event)">
                                    <div style="margin-top: 9px">
                                        <img src="{{asset($news->photo)}}" alt="" id="img" width="150">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Description</h3><hr>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="description" placeholder="Description" id="input-skill"
                                    data-toggle="summernote" data-lang="" class="form-control"
                                    style="display: none;">{{$news->description}}</textarea>
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
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
            $('#menu_news').addClass('active');
        }); 
        function preview(evt)
        {
            let img = document.getElementById('img');
            img.src = URL.createObjectURL(evt.target.files[0]);
        }
    </script>
    <script type="text/javascript" src="{{asset('backend/js/summernote/summernote.js')}}"></script>
    <link href="{{asset('backend/js/summernote/summernote.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('backend/js/summernote/summernote-image-attributes.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/summernote/opencart.js')}}"></script>
@endsection
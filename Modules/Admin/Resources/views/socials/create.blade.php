@extends('admin::layouts.master')
@section('header')
    <strong>Create Social</strong>
@endsection
@section('content')
    <form action="{{route('social.store')}}" method="POST">
        @csrf
        <div class="card card-gray">
            <div class="toolbox">
                <button class="btn btn-primary btn-lg btn-oval">
                    <i class="fa fa-save"></i>
                </button>
                <a href="{{route('social.index')}}" class="btn btn-secondary btn-lg btn-oval">
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
                                <input type="text" class="form-control" id="name" name="name" required 
                                    value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-3">Icon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="icon" name="icon" required
                                    value="{{old('icon')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-sm-3">URL <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="url" name="url" required
                                    value="{{old('url')}}">
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
            $('#menu_config').addClass('active open');
            $('#collapse_config').addClass('collapse in');
            $('#menu_social').addClass('active');
        });
        function preview(evt)
        {
            let img = document.getElementById('img');
            img.src = URL.createObjectURL(evt.target.files[0]);
        }
    </script>
@endsection
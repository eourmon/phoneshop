@extends('admin::layouts.master')
@section('header')
    <strong>Create Slides</strong>
@endsection
@section('content')
    <form action="{{route('slide.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-gray">
            <div class="toolbox">
               <button class="btn btn-primary btn-oval btn-lg">
                  <i class="fa fa-save"></i>
               </button>
               <a href="{{route('slide.index')}}" class="btn btn-secondary btn-lg btn-oval">
                    <i class="fa fa-reply"></i>
               </a>
            </div>
            <div class="card-block">
                @component('admin::coms.alert')

                @endcomponent   
                <div class="row">
                    <div class="col-sm-7">
                        
                        <div class="form-group row">
                            <label for="sequence" class="col-sm-3">Sequence <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sequence" name="sequence"
                                    required value="1">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <label for="photo" class="col-sm-3">Photo <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="photo" name="photo"
                                    accept="image/*" onchange="preview(event)">
                                    <div style="margin-top: 9px">
                                        <img src="" alt="" id="img" width="150">
                                    </div>
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
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
           
            $('#menu_slide').addClass('active');
        });
        function preview(evt)
        {
          let img= document.getElementById('img');
          img.src = URL.createObjectURL(evt.target.files[0]);
        }
    </script>
   
@endsection
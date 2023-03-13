@extends('admin::layouts.master')
@section('header')
    <strong>Create Jobs</strong>
@endsection
@section('content')
    <form action="{{route('job.store')}}" method="POST">
        @csrf
        <div class="card card-gray">
            <div class="toolbox">
                <button class="btn btn-primary btn-lg btn-oval">
                    <i class="fa fa-save"></i>
                </button>
                <a href="{{route('job.index')}}" class="btn btn-secondary btn-lg btn-oval">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
            <div class="card-block">
                @component('admin::coms.alert')
                @endcomponent
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="job_title" class="col-sm-4">Job Title : <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="job_title" name="job_title" required autofocus >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-4">City / Province : </label>
                            <div class="col-sm-8">
                                <select name="city" id="province" required class="form-control">
                                    <option value="">Please Select Province</option>
                                    @foreach($provinces as $p)
                                    <option value="{{$p->id}}">{{$p->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-sm-4">Khan / District :</label>
                            <div class="col-sm-8">
                                <select name="district" id="district" required class="form-control">
                                    <option value="">Please Select District</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="commune" class="col-sm-4">Sangkat / Com :</label>
                            <div class="col-sm-8">
                                <select name="commune" id="commune" required class="form-control">
                                    <option value="">Please Select Commune</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_name" class="col-sm-4">Street Name :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="street_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_number" class="col-sm-4">Street Number :</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="street_number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4">Address :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="hiring" class="col-sm-4">Hiring : </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control"  name="hiring">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="positions" class="col-sm-4">Position : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="positions">
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label for="branch" class="col-sm-4">Branch : </label>
                            <div class="col-sm-8">
                                <select name="branch" id="branch" required class="form-control">
                                    @foreach($branchs as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="duration" class="col-sm-4">Duration : </label>
                            <div class="col-sm-8">
                                <input type="number" value="1" name="duration" id="duration" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="open_date" class="col-sm-4">Open Date : </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="open_date" name="open_date" required value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="close_date" class="col-sm-4">Close Date : </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="close_date" name="close_date" required value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Job Description</h3><hr>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="job_description" placeholder="Description" id="input-description"
                                    data-toggle="summernote" data-lang="" class="form-control"
                                    style="display: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Job Requirement</h3><hr>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="job_requirment" placeholder="Requirement" id="input-requirement"
                                    data-toggle="summernote" data-lang="" class="form-control"
                                    style="display: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Skill and Qualification</h3><hr>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="skill" placeholder="Skill and Qualification" id="input-skill"
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
    <script>
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
            $('#menu_job').addClass('active open');
            $('#collapse_job').addClass('collapse in');
            $('#menu_employee').addClass('active');
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
    <script>
        $(document).ready(function(){
            $('#province').change(function(){
                let cid = $(this).val();
                console.log(cid);
                console.log(burl + "/get_district?q=" + cid);
                $.ajax({
                    type: "GET",
                    url: burl + "/admin/job/get_district?q=" + cid,
                    success: function(result){                   
                        var myselect = $('<select>');
                        $('#district').find('option').not(':first').remove();
                        $.each(result, function(index, key) {
                        myselect.append( $('<option></option>').val(key.id).html(key.description) );
                        });
                        $('#district').append(myselect.html());
                    },
                    error: function(e){
                        console.log(e.responseText);
                    }
                })
            });
            $('#district').change(function(){
                let cid = $(this).val();
                $.ajax({
                    type: "GET",
                    url: burl + "/admin/job/get_commune?q=" + cid,
                    success: function(result){  
                        console.log(result);                
                        var myselect = $('<select>');
                        $('#commune').find('option').not(':first').remove();
                        $.each(result, function(index, key) {
                        myselect.append( $('<option></option>').val(key.id).html(key.description) );
                        });
                        $('#commune').append(myselect.html());
                    },
                    error: function(e){
                        console.log(e.responseText);
                    }
                })
            });
        })
    </script>
    <script>
        let start = $("#open_date").val();
        let d = new Date(start);
        var newDate = addDays(d, $('#duration').val());
        let end = new Date(newDate);
        $("#close_date").val(end.toISOString().slice(0,10));
        $('#open_date').on('change', function(){
            let start = $(this).val();
            let d = new Date(start);
            var newDate = addDays(d, $('#duration').val());
            let end = new Date(newDate);
            $("#close_date").val(end.toISOString().slice(0,10));
        });
        $('#duration').on('change', function(){
            let start = $("#open_date").val();
            let d = new Date(start);
            var newDate = addDays(d, $(this).val());
            let end = new Date(newDate);
            $("#close_date").val(end.toISOString().slice(0,10));
        });
        $('#duration').on('keyup', function(){
            let start = $("#open_date").val();
            let d = new Date(start);
            var newDate = addDays(d, $(this).val());
            let end = new Date(newDate);
            $("#close_date").val(end.toISOString().slice(0,10));
        });
        function addDays(theDate, days) {
            return new Date(theDate.getTime() + days*24*60*60*1000);
        }
    </script>
@endsection
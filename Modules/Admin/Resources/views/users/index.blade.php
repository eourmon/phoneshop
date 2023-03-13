@extends('admin::layouts.master')
@section('header')
    <strong>Users</strong>
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    @cancreate('user')
                    <a href="{{route('user.create')}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    @endcancreate
                    <a href="" data-toggle="tooltip" title="" class="btn btn-secondary btn-lg btn-oval"
                        data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                </div>
                <div class="col-sm-4 mb-2">
                    <form action="{{route('user.search')}}">
                        <input type="text" class="form-control"  name="q" placeholder="Search by Keyword.." value="{{$q}}">
                    </form>
                </div>
            </div>
        </div>
        <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $pagex = @$_GET['page'];
                        if(!$pagex)   $pagex = 1;
                        $i = config('app.row') * ($pagex-1) + 1;
                    ?>
                    @foreach($users as $u)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <img src="{{asset($u->photo)}}" alt="" width="55">
                        </td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->r_name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->username}}</td>
                        <td>
                            @canedit('user')
                            <a href="{{route('user.edit', $u->id)}}" class="btn btn-primary btn-sm btn-oval" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            @endcanedit
                            
                            @candel('user')
                            <a href="{{route('user.delete', $u->id)}}" class="btn btn-danger btn-sm btn-oval" title="Delete" onclick="return confirm('You want to delete?')">
                                <i class="fa fa-trash"></i>
                            </a>
                           @endcandel
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->appends(request()->input())->links()}}
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
            $('#menu_user').addClass('active');
        });
    </script>
@endsection
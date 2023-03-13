@extends('admin::layouts.master')
@section('header')
    <strong>Roles Permission</strong>
@endsection
@section('content')
    {{csrf_field()}}
    <div class="card card-gray">
        <div class="toolbox">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('role.index')}}" class="btn btn-primary btn-lg btn-oval">
                        <i class="fa fa-reply"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
            <table class="table table-sm table-bordered">
                <p>
                    <strong>Set permission for role [ <span class="text-danger">{{$roles->name}}</span> ]</strong>
                </p>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>View</th>
                        <th>Create</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($permissions as $p)
                        <tr rid={{$roles->id}} rpid="{{$p->id?$p->id:'0'}}" pid={{$p->pid}}>
                            <td>{{$i++}}</td>
                            <td>{{$p->alias}}</td>
                            <td>
                                <input type="checkbox" name="" id="" value="{{$p->list?'1': '0'}}" {{$p->list?'checked':''}}
                                    onchange="save(this)">
                            </td>
                            <td>
                                <input type="checkbox" name="" id="" value="{{$p->create?'1': '0'}}" {{$p->create?'checked':''}}
                                    onchange="save(this)">
                            </td>
                            <td>
                                <input type="checkbox" name="" id="" value="{{$p->edit?'1': '0'}}" {{$p->edit?'checked':''}}
                                    onchange="save(this)">
                            </td>
                            <td>
                                <input type="checkbox" name="" id="" value="{{$p->delete?'1': '0'}}" {{$p->delete?'checked':''}}
                                    onchange="save(this)">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // Submit data to server
        var burl = "{{url('admin')}}";
        $(document).ready(function(){
            $('#sidebar-menu li').removeClass('active');
            $('#sidebar-menu li ul li').removeClass('active');
            $('#menu_config').addClass('active open');
            $('#collapse_config').addClass('collapse in');
            $('#menu_role').addClass('active');
        });
    </script>
    <script>
        var burl = "{{url('admin/')}}"
        function save(obj)
        {
            let token = $("input[name='_token']").val();
            let val = $(obj).val();
            if(val==1) 
            {
                $(obj).val(0);
            }
            else{
                $(obj).val(1);
            }
            let tr = $(obj).parent().parent();
            let rid = $(tr).attr('rid');
            let rpid = $(tr).attr('rpid');
            let pid = $(tr).attr('pid'); 
            let tds = $(tr).find('td');
            let list = $(tds[2]).children('input').val();
            let create = $(tds[3]).children('input').val();
            let edit  = $(tds[4]).children('input').val();
            let del = $(tds[5]).children('input').val();
            let data = {
                pid: pid,
                role_id: rid,
                rpid: rpid,
                list: list,
                create:create,
                edit: edit,
                del: del
            };
            $.ajax({
                type:'POST',
                url: burl + "/role/permission/save",
                data:data,
                beforeSend: function(request){
                    return request.setRequestHeader('X-CSRF-Token',token);
                },
                success: function(sms)
                {
                    $(tr).attr('rpid',sms);
                }
            });
        }
    </script>
@endsection
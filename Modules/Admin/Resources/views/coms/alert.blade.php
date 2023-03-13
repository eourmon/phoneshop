@if(Session::has('success'))
    <div class="alert alert-success">
        <button class="close" type="button" data-dismiss='alert'>
            <span>&times;</span>
        </button>
        <div>
            {{session('success')}}
        </div>
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss='alert'>
            <span>&times;</span>
        </button>
        <div>
            {{session('error')}}
        </div>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss='alert'>
            <span>&times;</span>
        </button>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
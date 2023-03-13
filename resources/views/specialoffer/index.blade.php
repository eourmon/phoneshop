@extends('layouts.master')
@section('content')

<div class="container">

    <div class="secondhand-wrapper">
        @foreach($specialoffer as $i)
    	<div class="secondhand-wrapper-item col text-center specialoffer-font ">
            <a href="{{url('details/specialoffer?id='. $i->id)}}">
                <div class="secondhand-wrapper-img">
                    <img src="{{asset($i->photo)}}" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div class="mt-4 specialoffer-title">{{$i->title}}</div>
                <div class="specialoffer-discount">{{$i->discount}}</div>
                <div class="row">
                    <div class="col">
                        <div class="specialoffer-finalprice py-1">
                            {{$i->finalprice}}
                        </div>    
                    </div>
                    <div class="col">
                        <div class="specialoffer-price">
                            <s>{{$i->price}}</s>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col width-100">
                        <div class="specialoffer-deadline">
                            {{$i->deadline}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

</div>

@endsection
@extends('layout.master',['page_title'=>'Danh sach chung cu'])
@section('content')
    <div class="container">
        @foreach($apartments as $apartment)
            <div class="col-md-4">
                <div class="">
                    <img src="{{$apartment -> avartar}}">
                    <h5>{{$apartment -> name}}</h5>
                    <p>{{$apartment -> price}}</p>
                    <p>{{$apartment -> infoGeneral}}</p>
                    <p>{{$apartment -> address}}</p>
                </div>
            </div>

            @endforeach
            <div class="row float-right mr-3">
                {{$apartments->links()}}
            </div>
    </div>
@endsection
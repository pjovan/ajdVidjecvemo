@extends('master')
@section('content')
<div class="custom-product row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Searched products:</h4>
            <br>
            @foreach($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
                <div class="">
                    <h5>{{$item->name}}</h5>
                    <h7>{{$item->description}}</h7>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
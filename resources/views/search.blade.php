@extends('master')
@section('content')
<div class="custom-product ">
    <div claa="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Searched products</h4>
            @foreach($products as $item)
            <a href="detail/{{$item['id']}}">
                <div class="searched-item">
                    <img class="trending-image" src="{{$item['gallery']}}">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
@extends('master')
@section('content')
<div class="custom-product ">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Selected products:</h4>
            <br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-3 izbaci">
                    <div class="">
                        <h5>{{$item->name}}</h5>
                        <h7 class="product-description">{{$item->description}}</h7>
                    </div>
                </div>
                <div class="col-sm-4 izbaci">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning posebno-dugme">Remove from cart</a>
                </div>

            </div>
            @endforeach
            <br><br>
            <div  class="col-sm-10"><a href="ordernow" class="btn btn-success">Order now</a></div>
            

        </div>
    </div>
</div>

@endsection
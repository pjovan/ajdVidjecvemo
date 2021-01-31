@extends('master')
@section('content')
<div class="">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My orders:</h4>
            @foreach($orders as $item)
        
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="">
                        <h5>Name: {{$item->name}}</h5>
                        <h7>Delivery status: <p class="pasus product-description">{{$item->description}}</p> </h7>
                        <h7>Address: <h7 class="product-description"> {{$item->address}}</h7></h7>
                        <br>
                        <h7>Payment status: <h7 class="product-description"> {{$item->payment_status}}</h7></h7>
                        <br>
                        <h7>Payment method: <h7 class="product-description"> {{$item->payment_method}}</h7></h7>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
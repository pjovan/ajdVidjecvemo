@extends('master')
@section('content')
<div class="custom-product ">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My order</h4>
            <br>
            @foreach($orders as $item)
            <br>
            <div class="row searched-item cart-list-devider">
                <div clas="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div clas="colsm-3">
                    <div class="">
                        <h3>Name: {{$item->name}}</h3>
                        <h5>Delivery status: {{$item->description}}</h3>
                        <h5>Address: {{$item->address}}</h3>
                        <h5>Payment status: {{$item->payment_status}}</h3>
                        <h5>Payment method: {{$item->payment_method}}</h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
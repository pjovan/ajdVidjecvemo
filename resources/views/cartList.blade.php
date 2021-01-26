@extends('master')
@section('content')
<div class="custom-product ">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Selected products</h4>
            <br><br>
            <a href="ordernow" class="btn btn-success">Order now</a>
            <br>
            <br>
            <br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
                <div clas="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div clas="colsm-3">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h5>{{$item->description}}</h3>
                        </div>
                    </a>
                </div>
                <div clas="colsm-3">
                   <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                </div>
                
                </div>
            @endforeach
            
        </div>
    </div>
</div>

@endsection
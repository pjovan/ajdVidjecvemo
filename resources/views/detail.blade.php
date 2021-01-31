@extends('master')
@section("content")
<div class="custom-product">
    <div class="row">

        <div class="col-sm-6 product-image-container">
            <br><br>
            <img class="detail-img " src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <br><br>
            <h2>{{$product['name']}}</h2>
            <br><br>
            <h6>Price: <h6 class="product-description"> {{$product['price']}}</h6></h6>
            <h6>Description: <h6 class="product-description"> {{$product['description']}}</h6></h6>
            <h6>Caegory: <h6 class="product-description">{{$product['category']}}</h6></h6>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to cart</button>
            </form>
        </div>
    </div>

</div>

@endsection
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
        <a href="/">Go back</a>
        <h2>{{$product['name']}}</h2>
        <h5>Price: {{$product['price']}}</h3>
        <h5>Description: {{$product['description']}}</h3>
        <h5>Caegory: {{$product['category']}}</h3>
        <br><br>
        <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-primary">Add to cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy now or never</button>

        </div>
    </div>
   
</div>

@endsection
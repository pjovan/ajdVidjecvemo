@extends('master')
@section('content')
<div class="custom-product">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    
      @foreach($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
        <div class="overlay">

          <img class="slider-img" src="{{$item['gallery']}}">
          </div>
        </a>

        <div class="carusel-caption">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>
      </div>
      @endforeach
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon prev-color" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    </div>
    <div>
      <div class="trending-wrapper">
        <h4>Jus everything</h4>
        @foreach($products as $item)
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}">
          </a>
          <div class="">
            <h6>{{$item['name']}}</h6>
          </div>
        </div>
        @endforeach
      </div>
   
  </div>
  @endsection
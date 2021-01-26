<?php
use App\Http\Controllers\ProductController;

$total=0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li> 
      </ul>
      <form action="/search" class="d-flex">
        <input name="query" class="form-control me-2 search-field" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li><a href="/cartList">Cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
           @else
            <a href="/login">Login</a>
           @endif
        </ul>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Shop</title>
   
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    .custom-login{
        height:550px;
        padding-top:100px;
    }
    .slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px !important
    }
    .trending-image{
        height: 100px
    }
    .trending-item{
        float: left;
        width:25%
    }
    .trending-wrapper{
        margin:30px
    }
    .detail-img{
        height:200px
    }
    .search-field{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        padding-top: 20px;
        padding-bottom: 20px
    }
    .form-button{
        margin-left: 10px;
    }

a{
    color:#868a91;
}
.prev-color{
    color: #868a91;
}
.carousel-control-prev{
}
.carusel-caption{
    text-align:center;
}
.float-end{
    padding-left:30vw;
}
.li-item{
    margin-left:10px;
}
.trending-wrapper{
    margin-top:50px;
}
.znaci{
    margin-top: 9px
}
.product-description{
    color: #868a91;
}
.izbaci{
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.posebno-dugme{
    color: white;
}

.panel-footer{
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e8e9eb;
}
.pasus{
    margin-bottom: 0rem;
}

.product-image-container{
    display: flex;
    align-items: center;
    justify-content: center;
}
.tabela-margina{
    margin-top:25px;
}
.custom-login{
    height:580px;
}

</style>
</html>
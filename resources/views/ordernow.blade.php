@extends('master')
@section('content')
<div class="custom-product ">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>{{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/action_page.php">
                <div class="form-group">
                    <textarea type="email" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment method:</label> <br>
                    <input type="radio" name="payment"><span>  Online payment</span><br>
                    <input type="radio" name="payment"><span>  Credit card</span><br>
                    <input type="radio" name="payment"><span>  Cash</span><br>
                </div>
                <button type="submit" class="btn btn-success">Order</button>
            </form>
        </div>
    </div>
</div>

@endsection
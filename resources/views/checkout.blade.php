@extends('layouts.master')
@section('title', 'Daftar Pesanan')
@section('content')

<html>
<head>
<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            
            <h1>Checkout</h1>
            <h4>Your Total : Rp. {{$total}}</h4>
            <form action="{{route('checkout')}}" method="post" id="checkout-form">
            
            <div class="form-group">
                    <label for="formGroupExampleInput">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat</label>
                    <input type="text" class="form-control" id="address" placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Pengguna Kartu</label>
                    <input type="text" class="form-control" id="card-name" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Credit Card Number</label>
                    <input type="text" class="form-control" id="card-number" placeholder="Another input">
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Expiration Month</label>
                                <input type="text" class="form-control" id="card-expiry-month" placeholder="Another input">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Expiration Year</label>
                                <input type="text" class="form-control" id="card-expiry-month" placeholder="Another input">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">CVC</label>
                    <input type="text" class="form-control" id="card-cvc" placeholder="Another input">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">BAYAR</button>
            </form>
            <br>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
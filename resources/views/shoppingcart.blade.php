@extends('layouts.master')
@section('title', 'Daftar Pesanan')
@section('content')

<html>
<head>
<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
@if(Session::has('cart'))
<div class="container"><br>

<form action="/postcheckout" method="post">
{{csrf_field()}}
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                <Table class="table table-hover">
                @foreach($data_item as $item)
                <tr>
                    <td>{{$item['item']['nama']}}</td>
                    <td>{{$item['qty']}}</td>
                    <td>{{$item['price']}}</td>
                    <td> <a class="btn btn-secondary  btn-sm" href=" " role="button">- 1</a></td>
                    <td><a class="btn btn-danger  btn-sm" href="" role="button">Hapus</a></td>
                </tr>
                <tr>
                <td><input type="hidden" name="nama_item" class="form-control" id="nama" placeholder=" " value="{{$item['item']['nama']}}"> </td>
                <td><input type="hidden" name="jumlah" class="form-control" id="jumlah" placeholder=" " value="{{$item['qty']}}"></td>
                <td><input type="hidden" name="harga" class="form-control" id="harga" placeholder=" " value="{{$item['price']}}"></td>
                
                </tr>
                @endforeach
                </Table>
                <hr>
            </ul>
        </div>
    </div>
    
<br>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong> Total: {{ $totalPrice }}</strong>
        </div>
    </div>
    
    <button type="submit" name="s" class="btn btn-primary">BAYAR</button>
</form>
    <hr>
    <div class="row">
    <!--
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
        </div>
        -->
    </div>

@else

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>Tidak ada Pesanan</h2>
        </div>
    </div>

@endif
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
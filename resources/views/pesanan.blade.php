@extends('layouts.master')
@section('title', 'History Transaksi')
@section('content')
<html>
<head>
    <title> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('assets/fonts/sb-bistro/sb-bistro.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/o2system-ui/o2system-ui.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/owl-carousel/owl-carousel.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/cloudzoom/cloudzoom.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/thumbelina/thumbelina.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/theme.css')}}">

</head>
<body><br>
<center>
<h5>Pesanan Masuk</h5><br>
</center>
<form action="/verifikasi" method="post">
{{csrf_field()}}
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_pesanan as $item)
    <tr>
      <td>{{ $item->nama_item }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>{{ $item->total }}</td>
      <td>{{ $item->status }}</td>
      <td>
        <button type="submit" name="s" class="btn btn-primary btn-sm">Verivikasi</button>
        </td>
      
    </tr>
    <tr>
        <td><input type="hidden" name="nama_item" class="form-control" id="nama_item" placeholder=" " value="{{$item->nama_item}}"> </td>
        <td><input type="hidden" name="jumlah" class="form-control" id="jumlah" placeholder=" " value="{{$item->jumlah}}"></td>
        <td><input type="hidden" name="total" class="form-control" id="total" placeholder=" " value="{{$item->total}}"></td>
        <td><input type="hidden" name="status" class="form-control" id="status" placeholder=" " value="Selesai"></td>    
        
    
    </tr>
    @endforeach
   </tbody>
</table>
</form>
</body>
@endsection
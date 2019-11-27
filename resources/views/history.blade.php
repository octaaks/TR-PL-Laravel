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
<h5>History Transaksi</h5><br>
</center>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Date</th>
      <th scope="col">User</th>
      <th scope="col">Order</th>
      <th scope="col">Total</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>12 maret 2019 (DB)</td>
      <td>Table 1 (DB)</td>
      <td>Bakwan jangkrik(DB)</td>
      <td>12000 (DB)</td>
      <td><a href="#"" class="badge badge-info">Prin Nota</a></td>
    </tr>
   </tbody>
</table>
</body>
@endsection
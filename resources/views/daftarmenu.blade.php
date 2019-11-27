@extends('layouts.master')
@section('title', 'Daftar Menu')
@section('content')

<html>
<head>
<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<P>
<div class="container">
	<div class="container">
	<div class="row">
		<div class="col-sm">
			<h1>Menu </h1>
		</div>
		<left>
		<div class="col-sm">
			<div class="btn-group" role="group" aria-label="filter">
				<a class="btn btn-secondary  btn-sm" href="daftarmenu" role="button" >Semua</a>
				<a class="btn btn-secondary  btn-sm" href="daftarmenu?cari=100" role="button">Makanan</a>
				<a class="btn btn-secondary  btn-sm" href="daftarmenu?cari=200" role="button">Minuman</a>
			</div>
		</div>
		</left>
	</div>
	</div>

<div class=" row align-items-start">
@foreach($data_item as $item)
  <div class="col">
	<div class="card" style="width: 18rem; height: 23rem; ">
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><img class="card-img-top" style="height: 10rem;" src="{{$item->gambar}}" alt="Card image cap"></li>
		<li class="list-group-item">{{$item->nama}}</li>
		<li class="list-group-item">Rp. {{$item->harga}}</li>
		<li class="list-group-item">
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Jumlah" value="1" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button">+</button>
				</div>
			</div>
		</li>
	</ul>
	</div>
  </div>
	@endforeach
</div>

<div class="container">
	
	<h1>Transaksi</h1>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
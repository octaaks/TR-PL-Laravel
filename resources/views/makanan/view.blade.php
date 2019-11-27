@extends('layouts.master')
@section('title', 'Daftar Menu')
@section('content')
<!--MINUMAN -->
<html>
<head>
<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="mt-5">
	<div class="mx-auto" style="width: 90%;">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
    Tambah Menu
    </button>

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
	<table class="table table-bordered table-sm table-hover">
  <thead>
    <tr>
			<th>KODE</th>
			<th>NAMA</th>
			<th>HARGA</th>
			<th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data_makanan as $makanan)
		<tr>
			<td>{{$makanan->kode}}</td>
			<td>{{$makanan->nama}}</td>
			<td>{{$makanan->harga}}</td>
			<td width="20%">
			<a class="btn btn-primary  btn-sm" href="/editmakanan/{{$makanan->id}}" role="button">Edit</a>
			<a class="btn btn-danger  btn-sm" href="/deletemakanan/{{$makanan->id}}" role="button">Delete</a>
		</tr>
		@endforeach
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<!-- Modal TAMBAH -->
	<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
            <form method="post" action="/addmakanan">
            {{ csrf_field() }}
            <div class="">
            <table class="table table-borderless  table-sm">
                <tr>
                    <input type="hidden" name="id" required="">
                </tr>
                <tr>
                    <td>KODE</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan Kode" name="kode"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan Nama" name="nama"></td>
                    
                </tr>
                <tr>
                    <td>HARGA</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan Harga" name="harga"></td>
                    
                </tr>
                <tr>
                    <td>GAMBAR</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan URL Gambar" name="gambar"></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Tambah"></td>
                </tr>
            </table>
        </form>

		</div>
		<div class="modal-footer">
        
		</div>
		</div>
	</div>
	</div>

<!-- Modal TAMBAH -->
	<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
            <form method="post" action="/addmakanan">
            {{ csrf_field() }}
            <div class="">
            <table class="table table-borderless  table-sm">
                <tr>
                    <input type="hidden" name="id" required="">
                </tr>
                <tr>
                    <td>KODE</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan Kode" name="kode"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan Nama" name="nama"></td>
                    
                </tr>
                <tr>
                    <td>HARGA</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan Harga" name="harga"></td>
                    
                </tr>
                <tr>
                    <td>GAMBAR</td>
                    <td><input class="form-control" type="text" placeholder="Masukkan URL Gambar" name="gambar"></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Tambah"></td>

                </tr>
            </table>
        </form>

		</div>
		</div>
	</div>
	</div>

</body>
</html>
@endsection
@extends('layouts.master')
@section('title', 'Daftar Menu')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html>
<head>
</head>
<body>
	<form method="post" action="/updateminuman/{{$minuman->id}}">
		{{ csrf_field() }}
	<div class="mt-5">
	<div class="mx-auto" style="width: 90%;">
		<table class="table table-borderless">
			<tr>
				<input type="hidden" name="id" value="{{ $minuman->id }}">
			</tr>
			<tr>
				<td>KODE</td>
				<td><input class="form-control" type="text" placeholder="Kode" name="kode"  value="{{ $minuman->kode }}"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input class="form-control" type="text" placeholder="Nama" name="nama"  value="{{ $minuman->nama }}"></td>
				
			</tr>
			<tr>
				<td>HARGA BARANG</td>
				<td><input class="form-control" type="text" placeholder="Harga" name="harga"  value="{{ $minuman->harga }}"></td>
				
			</tr>
			<tr>
				<td>GAMBAR</td>
				<td><input class="form-control" type="text" placeholder="url gambar" name="gambar"  value="{{ $minuman->gambar }}"></td>
				
			</tr>
			<tr>
				<td colspan="2"><center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Simpan"></td>

			</tr>
		</table>
	</form>
</body>
</html>

@endsection
@extends('layouts.master')
@section('title', 'Daftar Menu')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html>
<head>
</head>
<body>
	<form method="post" action="/updateitem/{{$item->id}}">
		{{ csrf_field() }}
	<div class="mt-5">
	<div class="mx-auto" style="width: 90%;">
		<table class="table table-borderless">
			<tr>
				<input type="hidden" name="id" value="{{ $item->id }}">
			</tr>
			<tr>
				<td>KODE</td>
				<td><input class="form-control" type="text" placeholder="Kode" name="kode"  value="{{ $item->kode }}"></td>
			</tr>
			<tr>
				<td>JENIS</td>
				<td>
					<select class="custom-select" name="jenis" id="select1">
						<option selected>Jenis</option>
						<option value="Makanan" @if($item->jenis == 'Makanan') selected @endif>Makanan</option>
						<option value="Minuman" @if($item->jenis == 'Minuman') selected @endif>Minuman</option>
					</select>
				</td>
				
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input class="form-control" type="text" placeholder="Nama" name="nama"  value="{{ $item->nama }}"></td>
				
			</tr>
			<tr>
				<td>HARGA BARANG</td>
				<td><input class="form-control" type="text" placeholder="Harga" name="harga"  value="{{ $item->harga }}"></td>
				
			</tr>
			<tr>
				<td>GAMBAR</td>
				<td><input class="form-control" type="text" placeholder="url gambar" name="gambar"  value="{{ $item->gambar }}"></td>
				
			</tr>
			<tr>
				<td colspan="2"><center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Simpan"></td>

			</tr>
		</table>
	</form>
</body>
</html>

@endsection
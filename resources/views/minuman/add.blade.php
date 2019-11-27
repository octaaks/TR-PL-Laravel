<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html>
<head>
	
	<title>Tambah Menu Menu</title>
</head>
<body>
	<form method="post" action="/toko/queryinsert">
		{{ csrf_field() }}
	<div class="mt-5">
	<div class="mx-auto" style="width: 40%;">
		<table class="table table-borderless">
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
</body>
</html>
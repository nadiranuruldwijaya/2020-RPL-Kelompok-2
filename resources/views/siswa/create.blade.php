@extends()
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-AU-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<center>
		<h1>DI SINI TEMPAT BIKIN AKUN OKE!!</h1>
		<form method="POST" action="{{ route('siswa.store') }}">
			@csrf
			<table border="0">
				<tr>
					<td>
						<label for="nis">NIS</label>
					</td>
					<td>
						<div>
							<input type="number" name="nis" id="nis" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="nama_lengkap">NAMA</label>
					</td>
					<td>
						<div>
							<input type="text" name="nama_lengkap" id="nama_lengkap" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="kelas">KELAS</label>
					</td>
					<td>
						<div>
							<select name="kelas" id="kelas">
								<option value="X RPL">X RPL</option>
								<option value="XI RPL">XI RPL</option>
								<option value="XII RPL">XII RPL</option>
							</select>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="tlp">NOMOR HP</label>
					</td>
					<td>
						<div>
							<input type="number" name="tlp" id="tlp" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="alamat">ALAMAT</label>
					</td>
					<td>
						<div>
							<textarea name="alamat" id="alamat" cols="50" rows="5">
							</textarea>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<button type="submit">SIMPAN</button>
					</td>
				</tr>
			
		</form>
	</center>

</body>
</html>
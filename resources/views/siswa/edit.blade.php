<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
	<meta charset="utf-8">
	<meta http-equiv="X-AU-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<center>
		<h1>YAKIN MAU DI EDIT ???</h1>
		<form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
			@csrf
			<table border="0">
				<tr>
					<td>
						<label for="nis">NIS</label>
					</td>
					<td>
						<div>
							<input type="number" value="{{ $siswa->nis }}" name="nis" id="nis" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="nama_lengkap">NAMA</label>
					</td>
					<td>
						<div>
							<input type="text" value="{{ $siswa->nama_lengkap }}" name="nama_lengkap" id="nama_lengkap" required="">
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
								<option value="X RPL" @if($siswa->kelas == 'X RPL') selected @endif>X RPL></option>
								<option value="XI RPL" @if($siswa->kelas == 'XI RPL') selected @endif>XI RPL></option>
								<option value="XII RPL" @if($siswa->kelas == 'XII RPL') selected @endif>XII RPL></option>
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
							<input type="number" value="{{ $siswa->tlp }}" name="tlp" id="tlp" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="alamat">ALAMAT</label>
					</td>
					<td>
						<div>
							<textarea name="alamat" id="alamat" cols="30" rows="3">	{{ $siswa->alamat }}
							</textarea>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<button type="submit">SIMPAN</button>
					</td>
				</tr>
				
			</table>
			
		</form>
	</center>

</body>
</html>